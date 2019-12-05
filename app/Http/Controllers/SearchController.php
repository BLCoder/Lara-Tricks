<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        $query=$request->input('query');

        $postt=Post::where('title','LIKE',"%$query%")
            ->orWhereHas('tags', function ($search) use ($query) {
                $search->where('name', 'like', '%'.$query.'%');
            })
            ->get();

        return view('frontend.search_page',['query'=>$query,'postt'=>$postt]);
    }
}
