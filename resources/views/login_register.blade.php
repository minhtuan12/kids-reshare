@extends('layouts.layout')


@section('styles')
    <link rel="stylesheet" href="css/styleLogin_Register.css">
@stop

@section('scripts')
    <script type="text/javascript" src="scripts/Login_Register.js"></script>    

@stop

@section('content')
    <div class="cont ">
        <form class="form sign-in  form-1" action="{{ route('login_register.login') }}" method="POST">
            @csrf

            <h2>Sign In</h2>
            <label>
                <span>Number</span>
                <input required type="tel" name="phone" class="number">
            </label>
            <label>
                <span>Password</span>
                <input required type="password" name="password" class="password">
            </label>
            <button class="submit" type="submit">Sign In</button>
            <p class="forgot-pass">Forgot Password ?</p>
        </form>

        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up">
                    <h2> New here ?</h2>
                </div>
                <div class="img-text m-in">
                    <h2> One of our ?</h2>
                    <p>If you already has an account, just sign in. we've missed you !</p>
                </div>
                <div class="img-btn">
                    <span class="m-up">Sign Up</span>
                    <span class="m-in ">Sign In</span>
                </div>
            </div>
            <form class="form sign-up form-2" action="{{ route('login_register.register') }}" method="POST">
                @csrf

                <h2>Sign Up</h2>
                <label>
                    <span>Name</span>
                    <input required type="text" class="name" name="fullname">
                    <span class="form__group-message"></span>
                </label>
                <label>
                    <span>Number</span>
                    <input required type="tel" class="number" name="phone">
                    <span class="form__group-message"></span>
                </label>
                <label>
                    <span>Password</span>
                    <input required type="password" class="password" name="password">
                    <span class="form__group-message"> </span>
                </label>
                <label>
                    <span>Confirm Password</span>
                    <input required type="password" class="confirmPassword" name="cfPassword">
                    <span class="form__grounp-message"></span>
                </label>
                <button type="submit" class="submit">Sign Up Now</button>
            </form>
        </div>
    </div>
    {{-- <script type="text/javascript" src="scripts/Login_Register.js"></script> --}}
    <script>
        validator({
            form: '.form-2',
            rules: [
                isRequired('.name'),
                isEmail('.email'),
                isPassword('.password'),
            ]
        })
    </script>

    <script>
        var msg = '{{ Session::get('wrong') }}';
        var exist = '{{ Session::has('wrong') }}';
        if (exist) {
            alert(msg);
        }
    </script>
    {{-- </body>

</html>  --}}
