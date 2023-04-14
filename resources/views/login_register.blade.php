{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Register</title>
    <link rel="stylesheet" href="{{ asset('css/styleLogin_Register.css') }}">


</head>

<body>
    <section class="navbar">
        <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" width="180px"
                    style="margin-left: 10px;"></a>
        </div>
        <nav>
            <ul>
                <li><a  href="#">Home</a></li>
                <li><a href="{{ route('products') }}">Products</a></li>
                <li><a href="{{ route('upload') }}">Donate</a></li>
                <li><a href="#">Account</a></li>
                <li><a class="active" href="{{ route('login_register') }}">Register/Login</a></li>
            </ul>
        </nav>

    </section>
    <div class="cont ">
        <div class="form sign-in  form-1">
            <h2>Sign In</h2>
            <form class="form" action="{{ route('login_register') }}" method="POST">

                @csrf
                <label>
                    <span>Number</span>
                    <input type="number" name="number" class="number">
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" class="password">
                </label>
                <button class="submit" type="submit">Sign In</button>
                <p class="forgot-pass">Forgot Password ?</p>
            </form>

        </div>

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
            <div class="form sign-up form-2">
                <h2>Sign Up</h2>
                <form class="form" action="{{ route('login_register') }}" method="POST">

                    @csrf
                    <label>
                        <span>Name</span>
                        <input required autofocus type="text" class="name" name="username">
                        <span class="form__group-message"></span>
                    </label>
                    <label>
                        <span>Number</span>
                        <input type="number" class="number" name="phone">
                        <span class="form__group-message"></span>
                    </label>
                    <label>
                        <span>Password</span>
                        <input required type="password" class="password" name="password">
                        <span class="form__group-message"> </span>
                    </label>
                    <label>
                        <span>Confirm Password</span>
                        <input required type="password" class="confirmPassword">
                        <span class="form__grounp-message"></span>
                    </label>
                    <button type="submit" class="submit">Sign Up Now</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="scripts/Login_Register.js"></script>
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
</body>

</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleLogin_Register.css">


</head> --}}

{{-- <body>
    <section class="navbar">
        <div class="logo">
            <a href="{{ route('index') }}"><img src="images/logo.png" width="180px" style="margin-left: 10px;"></a>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('products') }}">Products</a></li>
                <li><a href="{{ route('upload') }}">Donate</a></li>
                <li><a href="#">Account</a></li>
                <li><a class="active" href="{{ route('login_register') }}">Register/Login</a></li>
            </ul>
        </nav>

    </section> --}}

@extends('layouts.layout')

@section('title')
    Login - Register
@endsection

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
@endsection
{{-- </body>

</html>  --}}
