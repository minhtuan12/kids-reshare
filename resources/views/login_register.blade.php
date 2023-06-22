@extends('layouts.layout')


@section('styles')
    <link rel="stylesheet" href="css/styleLogin_Register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
@stop

@section('scripts')
    <script type="text/javascript" src="scripts/Login_Register.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

@stop

@section('content')

    <div class="cont ">
        @if ($message = Session::get('success'))
            <div style="text-align: center; margin-right: 245px;font-size: 22px;" class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>
        @elseif($message = Session::get('fail'))
            <div style="text-align: center; margin-right: 245px;font-size: 22px;" class="alert alert-success alert-block">
                <strong style="color: red">{{$message}}</strong>
            </div>
        @endif
        <form class="form sign-in  form-1" action="{{ route('login_register.login') }}" method="POST">
            @csrf

            <h2>Sign In</h2>
            <label>
                <span>Number</span>
                <input required type="tel" name="phone" class="number">
            </label>
            <label>
                <span>Password</span>
                <div style="display: flex">
                    <input id="password" required type="password" name="password" class="password">
                    <span id="iconHide" style="margin-top: 12px; margin-right: -20px; font-size: 20px">
                        <i onclick="handleShowPassword()" class="fa fa-eye-slash"></i>
                    </span>
                    <span id="iconShow" style="margin-top: 12px; margin-right: -20px; font-size: 20px">
                        <i onclick="handleShowPassword()" class="fa fa-eye"></i>
                    </span>
                </div>
            </label>
            <button class="submit" type="submit">Sign In</button>
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
                    <span>Phone number</span>
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
        function handleShowPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                document.getElementById('iconHide').setAttribute('style', 'display: none; margin-top: 12px; margin-right: -20px; font-size: 20px')
                document.getElementById('iconShow').setAttribute('style', 'display: flex; margin-top: 12px; margin-right: -20px; font-size: 20px')
                x.type = "text";
            } else {
                document.getElementById('iconHide').setAttribute('style', 'display: flex; margin-top: 12px; margin-right: -20px; font-size: 20px')
                document.getElementById('iconShow').setAttribute('style', 'display: none; margin-top: 12px; margin-right: -20px; font-size: 20px')
                x.type = "password";
            }
        }
    </script>
    {{-- </body>
</html>  --}}
