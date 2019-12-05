@extends('layouts.app')


@section('heading_title','Browsing Most Recent Tricks | Lara-Tricks')



@section('content')

    <div class="container">
        <div class="row push-down">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                <h1 class="page-title">Recent tricks</h1>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <form action="{{route('search')}}" method="get">
                    <input type="text" name="query" id="query" autocomplete="off" class="search-box form-control" placeholder="Search...">

                    <input style="display:none;" type="submit" value="search">

                    <div id="web_content_list_id" style="display: block;">
                        <ul id="overall_list_id">
                            {{--Ajax request add list into here--}}
                        </ul>
                    </div>
                </form>

            </div>
        </div>

        <div class="row push-down">
            <div class="col-lg-12">
                <ul class="nav nav-pills">
                    <li class="active"><a href="{{url('home')}}">Most recent</a></li>
                    <li><a href="{{route('popular')}}">Most popular</a></li>
                </ul>
            </div>
        </div>

        <div class="row js-trick-container" style="position: relative;">


            @foreach($trick as $row)


                <div href="#" class="trick-card col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                    <div class="trick-card-inner js-goto-trick" data-slug="how-to-make-multiple-auth-in-laravel-6">
                        <a class="trick-card-title" href="{{url('tricks/'.$row->slug)}}">
                            {{$row->title}}
                        </a>
                        <div class="trick-card-stats trick-card-by">by <b><a href="{{url('name/'.$row->user->id)}}"> {{$row->user->name}} </a></b></div>
                        <div class="trick-card-stats clearfix">
                            <div class="trick-card-timeago">Submitted
                                {{Carbon\Carbon::parse($row->created_at)->diffForHumans()}}
                                in
                                @foreach($row->categories as $clol)
                                    <a href="   {{url('categories/'.$clol->id)}}    ">{{$clol->name}} </a>
                                @endforeach
                            </div>
                            <div class="trick-card-stat-block"><span class="fa fa-eye"></span> {{$row->view_count}}</div>
                            <div class="trick-card-stat-block text-right"><span class="fa fa-heart"></span> {{$row->likes->count()}}</div>
                        </div>
                        <div class="trick-card-tags clearfix">
                            @foreach($row->tags as $col)
                                    <a href="{{url('tags/'.$col->id)}}" class="tag" title="authentication"> {{$col->name}} </a>
                            @endforeach

                            <br>
                            <br>

                        </div>
                    </div>
                </div>

            @endforeach



        </div>
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                {{$trick->links()}}
            </div>
        </div>

    </div>



@endsection
