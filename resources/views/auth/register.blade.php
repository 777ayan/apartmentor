<style>

    
    .reg_container{
        text-align: center;
        padding: 50px 100px;
        background-color: rgba( 245,245,245, 0.5);
        width:50%;
        margin-left:150px;
        border-radius:10%;
        margin-bottom: 30px;
    }


</style>



@extends('layouts.app')
<body style="background-image: url({{asset('images/bg6.jpg')}})">
@section('content')
@include('inc.navbar')
    <h2  style="text-align: center;">{{ __('SIGN UP') }}</h2>
        <div class="reg_container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

                    <input id="name" type="text" name="name"  style="margin-top:30px; width:500px; border-style:inset; height:30px; text-align:center;" placeholder="USERNAME">


                    @if ($errors->has('name'))
                        <span class="helper-text" data-error="wrong" data-success="right">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                        <br>

                    <input id="email" type="email" name="email" value="{{ old('email') }}" required  style="margin-top:20px; width:500px; border-style:inset; height:30px; text-align:center;" placeholder="EMAIL ADDRESS">

                    @if ($errors->has('email'))
                        <span class="helper-text" data-error="wrong" data-success="right">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                        <br>
            
                    <input id="password" type="password" name="password" required  style="margin-top:20px; width:500px; border-style:inset; height:30px; text-align:center;" placeholder="PASSWORD">
                    
                    @if ($errors->has('password'))
                    <span class="helper-text" data-error="wrong" data-success="right">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <br>
            
                    <input id="password-confirm" type="password" name="password_confirmation" required  style="margin-top:20px; width:500px; border-style:inset; height:30px; text-align:center;" placeholder="CONFIRM PASSWORD">
                
            <br>
            <p>
                <label>
                    <input type="checkbox" name="agent" style=" border-style:inset; margin-top:20px; height:30px; text-align:center;"   />
                    <span>{{ __('Registration as Agent') }}</span>
                </label>
            </p>
            <br>
            
                    <button type="submit" style="width:100px; border-style:outset; margin-top:20px; height:30px; text-align:center;">
                        {{ __('Register') }}
                    </button>
        </form>
        
        </div>

   @include('inc.footer')        
@endsection
</body>