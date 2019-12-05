@extends('layouts.app')
@section('heading_title','Categories | Lara-Tricks')
@section('heading_title')
    Browsing Most Recent Laravel Tricks
@endsection

@section('content')

    <div class="container">
        <div class="row push-down">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                <h1 class="page-title">Categories</h1>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <form action="{{route('search')}}" method="get">
                    <input type="text" name="query" class="search-box form-control" placeholder="Search...">

                    <input style="display:none;" type="submit" value="search">
                </form>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2">
                <div class="content-box">
                    <ul class="nav nav-list">
                        @foreach($categories as $cat)

                            <li>
                                <a href="{{url('categories/'.$cat->id)}}">
                                    {{$cat->name}}
                                    <span class="text-muted pull-right">
                                        {{$cat->posts->count()}}
                                    </span>
                                </a>

                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

    </div>

@endsection
