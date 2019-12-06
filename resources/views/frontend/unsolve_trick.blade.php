@extends('layouts.app')


@section('heading_title')
    Browsing Most Recent Laravel Tricks
@endsection



@section('content')


    <form method="post" action="{{url('add/cat')}}">
        @csrf
        <input type="text" name="tt">
        <button type="submit">Add</button>
    </form>



@endsection
