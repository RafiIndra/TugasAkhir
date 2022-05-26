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
    <div class="login7">
        <span id="motor2">Motor</span><span id="an">an</span></a>
    </div>
    <h1 id="login-text">Rent a motorbike, easily.</h1>
    <br>
    <div class="login-card">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Nama</label><br>
            <x-input id="name" type="text" name="name" :value="old('name')" required autofocus /><br><br>
            <label for="email">Email</label><br>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus /><br><br>
            <label for="password">Password</label><br>
            <input id="password" type="password" name="password" required autocomplete="current-password" /><br><br>
            <label for="password_confirmation">Confirm Password</label><br>
            <input id="password_confirmation" type="password" name="password_confirmation" required />

            <br><br>

            <div class="login-button">
                <button>
                    {{ __('Register') }}
                </button>
            </div>
            <br>
            <hr>
            <a id="forgot" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <span>&ensp;</span>
        </form>
    </div>
    <img src={{ URL::asset('bg3.jpg') }} class="background">
</body>

</html>