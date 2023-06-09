@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>
    <div class="content">
        <form class="form-login" method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="heading">LOGIN ADMIN</h1>
            <div class="form-group">
                            
                <input type="email" class="input" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">

                <input type="password" class="input" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Lưu mật khẩu') }}
                        </label>
                    </div>
                </div>
            </div>
            <button id="button" type="submit" class="button">Sign In</button>



            <div class="row mb-0">
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
</body>
@endsection
