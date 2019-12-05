@extends('layouts.app')

@section('heading_title')
{{$post->title}} | Lara-Tricks
@endsection
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">

                <div class="content-box">

                    <div class="trick-user">
                        <div class="trick-user-image">
                            <img src="{{asset($image)}}" class="user-avatar">
                        </div>
                        <div class="trick-user-data">
                            <h1 class="page-title">
                                {{$post->title}}
                                @if(Auth::user()==$post->user)
                                    <a href="{{url('user/tricks/edit/'.$post->id)}}" style="color: #ffaa30;margin-left: 50px">{{__('(Edit)')}}</a>
                                    <a href="{{url('user/tricks/delete/'.$post->id)}}" style="color: #ffaa30;margin-left: 50px">{{__('(Delete)')}}</a>
                                @endif
                            </h1>

                            <div>
                                Submitted by <b><a href="{{url('name/'.$post->user->id)}}"> {{$post->user->name}} </a></b> - {{Carbon\Carbon::parse($post->created_at)->diffForHumans()}} ago
                            </div>
                        </div>
                    </div>

                    <p> {{$post->body}} </p>

                    <pre><code class="php">{{{ $post->codes }}}</code></pre>

                </div>
            </div>
            <div class="col-lg-3 col-md-4" >

                <div class="content-box" >
                    <b>Stats</b>
                    @php
                        $total_like=$post->likes->count();
                    @endphp
                    <ul class="list-group trick-stats" data-postid="{{ $post->id }}" data-postlike="{{$total_like}}">
                        <li class="list-group-item">
                            @guest

                                    <span class="fa fa-heart " style="margin-right: 5px;"></span>{{$post->likes->count()}} likes

                            @else
                                <span class="fa fa-heart like_style" id="ttt" style="float: left;top: 3px" ></span>
                                <a href="#" class="like" id="like_text_style" style="margin-left: 10px;">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'You Like this' : 'Like this?' : 'Like this?'  }}</a>

                                <span class="pull-right like_count" >{{$total_like}} like</span>
                            @endguest

                        </li>
                            <li class="list-group-item">
                                <span class="fa fa-eye"></span> {{$post->view_count}} views
                            </li>
                    </ul>




                    <b>Categories</b>

                    <ul class="nav nav-list push-down">
                        <li>
                            @foreach($post->categories as $categorylist)
                                <a href="{{url('categories/'.$categorylist->id)}}">{{$categorylist->name}} </a>
                            @endforeach

                        </li>
                    </ul>

                    <b>Tags</b>

                    <ul class="nav nav-list push-down">
                        <li>
                            @foreach($post->tags as $taglist)
                                <a href="{{url('tags/'.$taglist->id)}}">
                                    {{$taglist->name}}
                                </a>
                            @endforeach

                        </li>
                    </ul>



                    <div class="clearfix">


                        <div style="float: left;width:120px;height: 25px" >
                            @if($first_post!=$post->id)
                            <a href="{{url('tricks/'.$prev_post)}}"  class="btn btn-sm btn-primary" >
                                « Previous Trick
                            </a>
                            @endif
                        </div>


                        <div  style="float: left;height: 25px">
                            @if($last_post!=$post->id)
                                <a href="{{url('tricks/'.$next_post)}}" title="" data-toggle="tooltip" class="btn btn-sm btn-primary" data-original-title="API response">
                                    Next Trick »
                                </a>
                            @endif
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 col-md-8">
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let token='{{Session::token()}}';
        let urlLike='{{route('like')}}';
    </script>


@endsection
