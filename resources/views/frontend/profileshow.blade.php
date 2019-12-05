@extends('layouts.app')

@section('heading_title')
    {{$user->name}} | Browsing Most Recent Laravel Tricks
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-box">
                    <div class="trick-user">
                        <div class="trick-user-image">
                            <img src="{{asset($image)}}" class="user-avatar">
                        </div>
                        <div class="trick-user-data">
                            <h1 class="page-title">
                                {{$user->name}}
                            </h1>
                            <div class="text-muted">
                                <b>Joined:</b> {{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}
                            </div>
                        </div>
                    </div>
                    <table>
                        <tbody><tr>
                            <th>Total tricks:</th>
                            <td>{{$post->count()}}</td>
                        </tr>
                        <tr>
                            <th width="140">Last trick:</th>
                            <td>6 months ago</td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>

        <div class="row push-down">
            <div class="col-lg-12">
                <h1 class="page-title">Submitted tricks</h1>
            </div>
        </div>

        <div class="row js-trick-container" style="position: relative; height: 267.4px;">

            <div class="row js-trick-container" style="position: relative;">


                @foreach($post as $row)


                    <div href="{{url('tricks/'.$row->title)}}" class="trick-card col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                        <div class="trick-card-inner js-goto-trick" data-slug="how-to-make-multiple-auth-in-laravel-6">
                            <a class="trick-card-title" href="{{url('tricks/'.$row->slug)}}">
                                {{$row->title}}
                            </a>
                            <div class="trick-card-stats trick-card-by">by <b><a href="{{url('name/'.$row->user->id)}}"> {{$row->user->name}} </a></b></div>
                            <div class="trick-card-stats clearfix">
                                <div class="trick-card-timeago">Submitted {{Carbon\Carbon::parse($row->created_at)->diffForHumans()}} in
                                    @foreach($row->categories as $clol)
                                        <a href="{{url('categories/'.$clol->id)}}">{{$clol->name}} </a>
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


        </div>
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

            </div>
        </div>

    </div>

@endsection
