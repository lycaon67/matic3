<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background-color: #fff;
            }

            .box{
                width: 300px;
                background: #fff;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }
            .box h1 {
                color: black;
                font-weight: 700;
                margin-bottom: 0px;
            }
            .box h4 {
                color: grey;
                font-weight: 500;
            }

            .box input[type="email"],.box input[type="password"]{
                display: block;
                text-align: center;
                margin: 20px auto;
                background: none;
                border: 2px solid #3498db;
                width: 260px;
                border-radius: 24px;
                padding: 12px 10px;
                color: black;
                outline: none;
                transition: .25s;
            }

            .box input[name="email"]:focus,.box input[type="password"]:focus{
                /* width: 250px; */
                border-color: #2ecc71;
            }

            .box button[type="submit"]{
                display: block;
                text-align: center;
                margin: 20px auto;
                background: #3498db;
                border: 2px solid #3498db;
                width: 150px;
                border-radius: 24px;
                /* padding: 12px 10px; */
                color: white;
                outline: none;
                transition: .25s;
            }
            .box button[type="submit"]:hover{
                border-color: #2ecc71;
            }
        </style>
    </head>
    <body>
        <form class="box" method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Matik</h1>
            <h4>Home Automation System</h4>
            
            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
            {{-- @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
            <input id="password" type="password" placeholder="Password" class="form-control @error('email') is-invalid @enderror" name="password" required autocomplete="current-password">
        
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            {{-- <input type="submit" name="submit" value="Login"> --}}
            <button type="submit" class="form-control btn btn-primary">
                {{ __('Login') }}
            </button>
        </form>
    </body>
</html>

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
