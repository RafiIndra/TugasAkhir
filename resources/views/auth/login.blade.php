<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoran</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>

<body>
    <div class="login">
        <span id="motor2">Motor</span><span id="an">an</span></a>
    </div>
    <h1 id="login-text">Rent a motorbike, easily.</h1>
    <br>
    <div class="login-card">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email</label><br>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus /><br><br>
            <label for="password">Password</label><br>
            <input id="password" type="password" name="password" required autocomplete="current-password" /><br><br>

            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>
            <br><br>

            <div class="login-button">
                <button>
                    {{ __('Log in') }}
                </button>
            </div>
            <br>
            <hr>

            <!--@if (Route::has('password.request'))
            <a id="forgot" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
            <span>&ensp;</span>-->

            <a id="forgot" href="{{ route('register') }}">
                {{ __('Dont have an account?') }}
            </a>
        </form>
    </div>
    <img src={{ URL::asset('bg3.jpg') }} class="background">
</body>

</html>