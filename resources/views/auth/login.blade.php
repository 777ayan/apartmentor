<style>
    .login_container{
        text-align: center;
        padding: 50px 100px;
        margin-bottom: 30px;
        
    }
</style>

@extends('layouts.app')
<body style="background-image: url({{asset('images/bg4.jpg')}})">
@section('content')

@include('inc.navbar')

    <h2 style="text-align: center;">{{ __('SIGN IN') }}</h2>

        <div class="login_container">

        <form method="POST" action="{{ route('login') }}">
            @csrf



                
                    <input id="email" type="email" style="width:500px; border-style:inset; height:30px; text-align:center;" placeholder="EMAIL ADDRESS" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>

        

        
                    <input id="password" style="width:500px; border-style:inset; margin-top:20px; height:30px; text-align:center;" placeholder="PASSWORD" type="password" name="password" required autocomplete="current-password">

                    @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>

    
                        <input class="form-check-input" type="checkbox" style=" border-style:inset; margin-top:20px; height:30px; text-align:center;" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    
                        <br>
    
                    <button type="submit" style="width:100px; border-style:outset; margin-top:20px; height:30px; text-align:center;">
                        {{ __('Login') }}
                    </button>
                    <br>
                    <!--
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" >
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif-->
        </form>

    </div>
    @include('inc.footer') 

@endsection
</body>