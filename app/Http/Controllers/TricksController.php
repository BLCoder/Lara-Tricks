<?php

namespace App\Http\Controllers;

use App\Category;
use App\Like;
use App\Post;
use App\Tag;
use App\Trick;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TricksController extends Controller
{
    //


  /*  public function __construct()
    {
        $this->middleware('auth');
    }*/



    public function index()
    {
        //$trick=Post::all();
        $trick=Post::orderBy('created_at','desc')->paginate(6);

        return view('frontend.home',['trick'=>$trick]);
    }

    public  function popular_post(){
        $posts=Post::orderBy('view_count','desc')->paginate(6);
        return view('frontend.popular_post',['posts'=>$posts]);
    }
    public function user_favorites($id){
        $posts=User::findorfail($id)->posts()->paginate(6);
        return view('frontend.user_favorite',['posts'=>$posts]);
    }

    public function single_trick_show($slug){

        $post=Post::where('slug',$slug)->first();
        $blogKey = 'blog_' . $post->id;
        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }



        $posts=Post::orderby('created_at','desc')->get();
        $first_post=$posts[0]->id;
        $last_post=Post::all()[0]->id;



        if($next_post=Post::where('id', '<', $post->id)->orderBy('id','desc')->first()){
            $next_post=Post::where('id', '<', $post->id)->orderBy('id','desc')->first()->slug;
        }
        if($prev_post=Post::where('id', '>', $post->id)->orderBy('id','asc')->first()){
            $prev_post=Post::where('id', '>', $post->id)->orderBy('id','asc')->first()->slug;
        }

        $image=DB::table('image_user')->where('user_id',$post->user->id)->first();
        if($image){

            //if user has an image in database
            $image=DB::table('image_user')->where('user_id',$post->user->id)->first()->image;
            return view('frontend.single_trick',[
                'post'=>$post,
                'image'=>$image,
                'first_post'=>$first_post,
                'last_post'=>$last_post,
                'next_post'=>$next_post,
                'prev_post'=>$prev_post
            ]);
        }else{

            //if user has no image in database
            $image='images/default.png';
            return view('frontend.single_trick',[
                'post'=>$post,
                'image'=>$image,
                'first_post'=>$first_post,
                'last_post'=>$last_post,
                'next_post'=>$next_post,
                'prev_post'=>$prev_post
            ]);
        }



        //return view('frontend.single_trick',compact('slug'));
    }

    public function profile_settings($id){
        $user=User::findorfail($id);
        return view('frontend.profile_setting',compact('user'));

    }

    public function profile_edit(Request $request,$id){
        $user=User::findorfail($id);
        $user->name= $request->name;
        $user->save();

        $image=$request->file('filedata');
        if($image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path=public_path('images/');
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            //if has already has an image in database then first delete it
            $img_data=DB::table('image_user')->where('user_id',$user->id)->first();

            if($img_data){
                unlink($img_data->image);
                DB::table('image_user')->where('user_id',$user->id)->delete();
            }


            $data['user_id']=$user->id;
            $data['image']='images/'.$image_full_name;
            DB::table('image_user')->insert($data);
        }

        return Redirect()->back();
    }

    public function user_tricks($id){
        $trick=User::findorfail($id)->posts()->paginate(6);

        return view('frontend.user_tricks',['trick'=>$trick]);
    }


    public function create_new_trick($id){
        //return response()->json($user);
        $user=User::findorfail($id);
        return view('frontend.create_post',['user'=>$user]);
    }




    public function show_tags(){
        $tags=Tag::withCount('posts')->get();

        return view('frontend.taglist',['tags'=>$tags]);
    }
    public function show_category(){
        $categories=Category::withCount('posts')->get();

        return view('frontend.categorieslist',['categories'=>$categories]);
    }
    public  function show_tag_post($id){
        $post=Tag::findorfail($id)->posts()->paginate(6);
        $tag_name=Tag::findorfail($id);
        //return response()->json($post);
        return view('frontend.showtagposts',['post'=>$post,'tag_name'=>$tag_name]);
    }
    public function show_category_post($id){
        //return response()->json($id);
        $post=Category::findorfail($id)->posts()->paginate(6);
        $category_name=Category::findorfail($id);
        return view('frontend.showcategoryposts',['post'=>$post,'category_name'=>$category_name]);
    }
    public function show_profile($id){

        $post=User::findorfail($id)->posts;
        $user=User::findorfail($id);
        $image=DB::table('image_user')->where('user_id',$user->id)->first();
        if($image){

            //if user has an image in database
            $image=DB::table('image_user')->where('user_id',$user->id)->first()->image;
            return view('frontend.profileshow',['post'=>$post,'user'=>$user,'image'=>$image]);
        }else{

            //if user has no image in database
            $image='images/default.png';
            return view('frontend.profileshow',['post'=>$post,'user'=>$user,'image'=>$image]);
        }

        //return view('frontend.profileshow',['post'=>$post,'user'=>$user]);
    }

    public function insert_trick(Request $request,$id){

        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
        ]);


        $post=new Post;
        $post->title=$request->title;
        $post->slug=\Str::slug($request->title);
        $post->body=$request->body;
        $post->codes=$request->codes;
        $post->user_id=$id;
        $post->save();

        if($request->filled('tags')){
            for($i=0;$i<count($request->tags); $i++){

                $data=array();
                $data['post_id']=$post->id;
                $data['tag_id']=$request->tags[$i];
                DB::table('post_tag')->insert($data);
            }
        }
        if($request->filled('categories')){
            for($i=0;$i<count($request->categories);$i++){
                $data=array();
                $data['post_id']=$post->id;
                $data['category_id']=$request->categories[$i];
                DB::table('category_post')->insert($data);
            }
        }


        //return Redirect()->back();
        /*if ($validator->fails()){
            return response()->json(['errors'=>$validator->errors()->all()]);
        }*/
       return redirect()->back();


    }


    public function edit_trick($id){
        $post=Post::findorfail($id);
        $tags=$post->tags;
        $categories=$post->categories;

        return view('frontend.edit_post',['post'=>$post,'tags'=>$tags,'categories'=>$categories]);
    }
    public function update_trick(Request $request,$id){
        $post=Post::findorfail($id);
        $post->title=$request->title;
        $post->slug=\Str::slug($request->title);
        $post->body=$request->body;
        $post->codes=$request->codes;
        $post->save();

        $tags=$post->tags;
        $categories=$post->categories;

        if($request->filled('tags')){
            for($i=0;$i<count($request->tags); $i++){
                if(!$tags->find($request->tags[$i])){             //if the tag is already exited in a post
                    $data=array();                                //then skip it
                    $data['post_id']=$post->id;
                    $data['tag_id']=$request->tags[$i];
                    DB::table('post_tag')->insert($data);
                }
            }
        }
        if($request->filled('categories')){
            for($i=0;$i<count($request->categories);$i++){
                if(!$categories->find($request->categories[$i])) {          //if the categories is already existed
                    $data = array();                                       //is a post then skip it
                    $data['post_id'] = $post->id;
                    $data['category_id'] = $request->categories[$i];
                    DB::table('category_post')->insert($data);
                }
            }
        }


        return Redirect()->back();
    }

    public function postLikePost(Request $request){
        $post_id=$request['postId'];

        $post=Post::find($post_id);
        if(!$post){
            return null;
        }
        $user=Auth::user();
        $like=$user->likes()->where('post_id',$post_id)->first();
        if($like){

            $like->delete();
            return response()->json($post->likes->count());
        }else{
            $likek=new Like();
            $likek->post_id=$post->id;
            $likek->user_id=$user->id;
            $likek->like = 1;
            $likek->save();
            return response()->json($post->likes->count());
        }


    }

    public function show_unsolve_trick(){
        return view('frontend.unsolve_trick');
    }

    public function delete_trick($id){
        $post=Post::findorfail($id);

        $post->tags()->detach();
        $post->categories()->detach();
        $post->delete();
        return redirect('/home');
    }


    function action(Request $request){
        if($request->ajax()){
            $output = '';
            $query = $request->get('query');
            if($query != ''){
                $data = Post::where('title','LIKE',"%$query%")
                    ->orWhere('body','like','%'.$query.'%')
                    ->orWhereHas('tags', function ($search) use ($query) {
                        $search->where('name', 'like', '%'.$query.'%');
                    })
                    ->orWhereHas('categories', function ($search) use ($query) {
                        $search->where('name', 'like', '%'.$query.'%');
                    })
                    ->get();
            }

            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $row){
                    //$output .= '<tr><td>'.$row->title.'</td></tr>';
                    $output .='<li><a href="'.url('tricks/'.$row->slug).'">'.$row->title.'</a></li>';
                }
            }
            else {
                $output .= '<tr><td>No Data Found</td></tr>';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            return response()->json($data);
        }
    }



    public function add_cat(Request $request){
        $data=new Tag();
        $data->name=$request->tt;
        $data->save();
        return \redirect()->back();
    }

}






