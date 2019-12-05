@extends('layouts.app')

@section('heading_title','Settings | Lara-Tricks')

@section('content')
@if(Auth::check())
    <div class="container">
        <div class="row push-down">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                <h1 class="page-title">User settings</h1>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 text-right">
                <a href="{{url('user/'.Auth::user()->id)}}" class="btn btn-primary">Back to profile</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2 col-xs-12">
                <div class="content-box">
                    <h3 class="content-title">Account Settings</h3>

                    <form id="loginform" class="form-horizontal" action="{{url('user/update/'.$user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label for="username" class="col-lg-4 control-label">Username</label>

                            <div class="col-lg-8">
                                <input id="username" class="form-control" name="name" type="text" value="{{$user->name}}">

                            </div>
                        </div>

                        <fieldset>
                            <div class="form-group">
                                <label for="email" class="col-lg-4 control-label">Email</label>

                                <div class="col-lg-8">
                                    <input type="email" disabled="disabled" class="form-control" id="email" placeholder="{{$user->email}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="avatar" class="col-lg-4 control-label">Profile Picture</label>

                                <div class="col-lg-8">

                                    <div id="upload-avatar" class="upload-avatar">
                                       {{-- <div class="userpic" style="background-image: url('https://avatars2.githubusercontent.com/u/56790895?v=4');">
                                            <div class="js-preview userpic__preview"></div>
                                        </div>--}}

                                        <div class="btn btn-sm btn-primary js-fileapi-wrapper">
                                            <div class="js-browse">
                                                <span class="btn-txt">Choose</span>

                                                <input type="file" name="filedata" >
                                            </div>

                                    {{--        <div class="js-upload" style="display: none;">
                                                <div class="progress progress-success"><div class="js-progress bar"></div></div>

                                                <span class="btn-txt">Uploading</span>
                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-lg-4 control-label">Password</label>

                                <div class="col-lg-8">
                                    <input id="password" class="form-control" name="password" type="password" placeholder="New Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation" class="col-lg-4 control-label">Confirm Password</label>

                                <div class="col-lg-8">
                                    <input id="password_confirmation" class="form-control" name="password_confirmation" type="password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-7 col-lg-12">
                                    <div class="text_right" style="margin-right: 318px;float: right">
                                        <input class="btn btn-primary" type="submit" value="Update">
                                    </div>


                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>

            <div class="col-md-7">
                <div id="cropper-preview" style="display:none;">
                    <div class="panel panel-info">

                        <div class="panel-heading">
                            <h3 class="panel-title">Crop the picture</h3>
                        </div>

                        <div class="panel-body">
                            <div class="js-img"></div>

                            <p>
                            </p><div class="js-upload btn btn-primary">Upload</div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@endsection
