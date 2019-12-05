@extends('layouts.app')
@section('heading_title','Login | Lara-Tricks')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-push-4 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2">
                <div class="content-box login-form">
                    <h1 class="page-title">Login</h1>
                    <br>
                    <a class="btn btn-default btn-block btn-login-github" href="{{ route('register') }}"> {{ __('Register') }} </a>
                    <br>
                    <br>
                    <hr>
                    <div style="padding: 1em">
                        <h4 class="sub-title">Legacy User Login</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            </div>

                            <div class="login-helpers">
                                <div class="checkbox">
                                    <label for="remember">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>


                                <div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block btn-login">
                                    {{ __('Login') }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
