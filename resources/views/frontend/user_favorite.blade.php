@extends('layouts.app')

@section('heading_title','My Favorites | Lara-Tricks')

@section('content')

    <div class="container">
        <div class="row push-down">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                <h1 class="page-title">My Favorites</h1>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <form action="{{route('search')}}" method="get">
                    <input type="text" name="query" class="search-box form-control" placeholder="Search...">

                    <input style="display:none;" type="submit" value="search">
                </form>

            </div>
        </div>

        <div class="row js-trick-container" style="position: relative;">

            @if(!$posts)
                <div class="col-lg-12">
                    <div class="alert alert-danger">
                        Sorry, but I couldn&#039;t find any tricks for you!
                    </div>
                </div>
            @else


            @foreach($posts as $post)


                <div href="#" class="trick-card col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                    <div class="trick-card-inner js-goto-trick" data-slug="how-to-make-multiple-auth-in-laravel-6">
                        <a class="trick-card-title" href="{{url('tricks/'.$post->slug)}}">
                            {{$post->title}}
                        </a>
                        <div class="trick-card-stats trick-card-by">by <b><a href="{{url('name/'.$post->user->id)}}"> {{$post->user->name}} </a></b></div>
                        <div class="trick-card-stats clearfix">
                            <div class="trick-card-timeago">Submitted {{Carbon\Carbon::parse($post->created_at)->diffForHumans()}} in
                                @foreach($post->categories as $clol)
                                    <a href="{{url('categories/'.$clol->id)}}">{{$clol->name}} </a>
                                @endforeach
                            </div>
                            <div class="trick-card-stat-block"><span class="fa fa-eye"></span> {{$post->view_count}}</div>
                            <div class="trick-card-stat-block text-right"><span class="fa fa-heart"></span> {{$post->likes->count()}}</div>
                        </div>
                        <div class="trick-card-tags clearfix">
                            @foreach($post->tags as $col)
                                <a href="{{url('tags/'.$col->id)}}" class="tag" title="authentication"> {{$col->name}} </a>
                            @endforeach
                            <br>
                            <br>
                        </div>

                    </div>
                </div>

            @endforeach
            @endif



        </div>


        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="pagination" role="navigation">
                    {{$posts->links()}}

                </ul>


            </div>
        </div>

    </div>



@endsection
