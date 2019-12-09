<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{asset('images/logo.ico')}}">
    <title>
        @yield('heading_title')
    </title>
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link href="{{asset('frontend/laratricks.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/selectize.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/all.css')}}" rel="stylesheet">



  
    <style type="text/css">
        .code {
  
            white-space: pre-wrap;
            border: solid lightgrey 1px
        }
    </style>
    <style type="text/css" media="screen">
    .ace_editor {
        position: relative !important;
        border: 1px solid lightgray;
        margin: auto;
        height: 300px;
  
    }

    .ace_editor.fullScreen {
        height: auto;
        width: auto;
        border: 0;
        margin: 0;
        position: fixed !important;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 10;
    }

    .fullScreen {
        overflow: hidden
    }

    .scrollmargin {
        height: 500px;
        text-align: center;
    }

    .large-button {
        color: lightblue;
        cursor: pointer;
        font: 30px arial;
        padding: 20px;
        text-align: center;
        border: medium solid transparent;
        display: inline-block;
    }
    .large-button:hover {
        border: medium solid lightgray;
        border-radius: 10px 10px 10px 10px;
        box-shadow: 0 0 12px 0 lightblue;
    }
    body {
        transform: translateZ(0);
    }
  </style>


</head>
<body>

<div id="wrap">
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".header-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('images/logo.png')}}">
                </a>
            </div>

            <div class="collapse navbar-collapse header-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{Route::currentRouteName()=='home' ? 'active' : ''}}"><a href="{{route('home')}}" class="{{Route::currentRouteName()=='home' ? 'active' : ''}}">Browse</a></li>
                    {{--<li><a href="{{route('home')}}">Browse</a></li>--}}
                    <li class="{{Route::currentRouteName()=='categories' ? 'active' : ''}}"><a href="{{route('categories')}}">Categories</a></li>
                    <li class="{{Route::currentRouteName()=='tags' ? 'active' : ''}}"><a href="{{route('tags')}}" >Tags</a></li>
                    @if (Auth::check())
                        @php
                            $url= 'user/tricks/new/'.Auth::user()->id ;
                        @endphp
                        <li class="{{ Request::is($url) ? 'active' : '' }}"> <a href="{{url('user/tricks/new/'.Auth::user()->id)}}">
                                Create New
                            </a>
                        </li>
                    @endif
                    <li class="{{Route::currentRouteName()=='unsolve.tricks' ? 'active' : ''}}"><a href="{{route('unsolve.tricks')}}" >UNSOLVE TRICKS</a></li>

                </ul>

                <div class="navbar-right hidden-xs">

                    @guest

                        <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Login') }}</a>


                        @if (Route::has('register'))

                                <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>

                        @endif


                    @else
                        <li class="nav-item dropdown">
                                <ul class="nav">
                                    <li class="dropdown ">
                                        <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">
                                             Profile <b class="caret"></b>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="active"><a href="{{url('user/'.Auth::user()->id)}}">My Tricks</a></li>

                                            <li class=""><a href="{{url('user/favorites/'.Auth::user()->id)}}">My Favorites</a></li>

                                            <li class=""><a href="{{url('user/settings/'.Auth::user()->id)}}">Settings</a></li>


                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                        </li>
                    @endguest



                </div>
            </div>
        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>

</div>


<div id="footer">
    <div class="container">
        <p class="text-muted credit">
            Maintained by <a href="">SR JAVED</a> with love. | <a href="#">About</a>
            <span class="pull-right"><a href="https://www.facebook.com/javedahmedbd56" ><i class="fab fa-facebook fa-lg"></i></a></span>
        </p>
    </div>
</div>


<script src="{{asset('frontend/jquery.js')}}"></script>
<script src="{{asset('frontend/bootstrap.js')}}"></script>
<script src="{{asset('frontend/selectize.js')}}"></script>
<script src="{{asset('frontend/ace.js')}}"></script>
<script src="{{asset('frontend/trick-new-edit.js')}}"></script>
<script src="{{asset('frontend/all.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/app.js')}}" defer></script>

<script src="{{asset('frontend/like.js')}}"></script>
<script src="{{asset('frontend/test.js')}}"></script>

<script>

    if( $("#like_text_style").text() == 'You Like this'){
        //document.getElementById("ttt").style.color = "red";
        $('.like_style').css('color','red');
    }
</script>
<script>
    $(document).ready(function(){

        fetch_customer_data();

        function fetch_customer_data(query = '')
        {
            $.ajax({
                url:"{{ route('live_search.action') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('#overall_list_id').html(data.table_data);

                }
            })
        }

        $(document).on('keyup', '#query', function(){
            var query = $(this).val();
            $('#overall_list_id').html('');
            fetch_customer_data(query);
        });
    });
</script>




</body>
</html>
