@extends('layouts.app')


@section('heading_title')
    Browsing Most Recent Laravel Tricks
@endsection



@section('content')

    <div class="container">
        <div class="row push-down">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                <h1 class="page-title">{{$postt->count()}} Search results for "<strong>{{$query}}</strong>"</h1>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <form action="{{route('search')}}" method="get">
                    <input type="text" name="query" class="search-box form-control" placeholder="Search...">

                    <input style="display:none;" type="submit" value="search">
                </form>

            </div>
        </div>

        <div class="row js-trick-container" style="position: relative; height: 1175.2px;">
            @if($postt->count()==0)
                <div class="col-lg-12">
                    <div class="alert alert-danger">
                        Sorry, but I couldn&#039;t find any tricks for you!
                    </div>
                </div>
            @else


            @foreach($postt as $row)
                <div href="#" class="trick-card col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                    <div class="trick-card-inner js-goto-trick" data-slug="how-to-make-multiple-auth-in-laravel-6">
                        <a class="trick-card-title" href="{{url('tricks/'.$row->title)}}">
                            {{$row->title}}
                        </a>
                        <div class="trick-card-stats trick-card-by">by
                            <b><a href="{{url('name/'.$row->user->id)}}">
                                    {{$row->user->name}}
                                </a></b>
                        </div>
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

                        </div>
                    </div>
                </div>

            @endforeach
            @endif

        </div>
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="pagination" role="navigation">

                    <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                        <span class="page-link" aria-hidden="true">‹</span>
                    </li>





                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="https://laravel-tricks.com/search?q=auth&amp;page=2">2</a></li>


                    <li class="page-item">
                        <a class="page-link" href="https://laravel-tricks.com/search?q=auth&amp;page=2" rel="next" aria-label="Next »">›</a>
                    </li>
                </ul>


            </div>
        </div>


    </div>



@endsection
