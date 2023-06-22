{{--<html lang="en">--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    --}}{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">--}}
{{--    <link rel="stylesheet"--}}
{{--        href="{{ asset('https://fonts.googloapis.com/css2? family-Poppins:wght@300;400;500;600;700&display=swap') }}"> --}}
{{--    <title> @yield('title') </title>--}}

{{--    @yield('styles')--}}
{{--    @yield('scripts')--}}

{{--</head>--}}

{{--<body>--}}
{{--    <div class="header">--}}
{{--        <div class="navbar">--}}
{{--            <div class="logo">--}}
{{--                <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" width="180px"--}}
{{--                        style="margin-left: 10px;"></a>--}}
{{--            </div>--}}
{{--            <nav>--}}
{{--                <ul>--}}
{{--                    <li><a class="active" href="{{ route('index') }}">Home</a></li>--}}
{{--                    <li><a href="{{ route('products') }}">Products</a></li>--}}
{{--                    <li><a href="{{ route('upload') }}">Donate</a></li>--}}
{{--                    @auth--}}
{{--                        @php($id = Auth::User()->id)--}}
{{--                        <li><a href="{{ route('account.create', ['id' => $id]) }}">Account</a></li>--}}
{{--                        <li><a href="{{ route('logout') }}">Log out</a></li>--}}
{{--                    @else--}}
{{--                        <li><a href="{{ route('login_register') }}">Register/Login</a></li>--}}
{{--                    @endauth--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--        @if ($errors->any())--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <div class="alert alert-danger" role="alert">--}}
{{--                    {{ $error }}--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        @enderror--}}
{{--        @if (Route::is('index'))--}}
{{--            <main>--}}
{{--                @yield('content')--}}
{{--            </main>--}}
{{--</div>--}}

{{--<!-- Page Content -->--}}
{{--@else--}}
{{--<main>--}}
{{--    @yield('content')--}}
{{--</main>--}}
{{--@endif--}}

{{--<!-------- footer -------->--}}
{{--<footer>--}}
{{--    @yield('footer')--}}
{{--</footer>--}}

{{--</body>--}}

{{--</html>--}}

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://fonts.googloapis.com/css2? family-Poppins:wght@300;400;500;600;700&display=swap') }}"> --}}
    <title> @yield('title') </title>

    @yield('styles')
    @yield('scripts')

</head>

<body>
<div class="header">
    <div style="position: sticky; z-index: 999; top: 0;">
        <div class="navbar">
            <div class="logo">
                <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" width="180px"
                                                    style="margin-left: 10px;"></a>
            </div>
            <nav>
                <ul style="margin-bottom:0">
                    <li><a class="active1" href="{{ route('index') }}">Home</a></li>
                    <li><a class="active2" href="{{ route('products') }}">Products</a></li>
                    <li><a class="active3" href="{{ route('upload') }}">Donate</a></li>
                </ul>
                @auth
                    @if(isset(Auth::user()->avatar))
                        <img style="border-radius: 50%; height: 40px; width: 40px; margin-left: 14px; cursor: pointer" src="{{ asset('storage/avatar/' . Auth::user()->avatar)}}" alt="" onclick="toggleMenu()">
                    @else
                        <img style="border-radius: 50%; height: 40px; width: 40px; margin-left: 14px; cursor: pointer" src="{{ asset('images/profile.png')}}" alt="" onclick="toggleMenu()">
                    @endif
                    <div class="sub-menu-wrap" id="subMenu" style="border-radius: 20px;">
                        <div class="sub-menu" style="border-radius: 20px;">
                            @if(isset(Auth::user()->fullname))
                                <div class="user-infor">
                                    @if(isset(Auth::user()->avatar))
                                        <img style="border-radius: 50%; height: 45px; width: 45px; cursor: pointer" src="{{ asset('storage/avatar/' . Auth::user()->avatar)}}" alt="" onclick="toggleMenu()">
                                    @else
                                        <img style="border-radius: 50%; height: 45px; width: 45px; cursor: pointer" src="{{ asset('images/profile.png')}}" alt="" onclick="toggleMenu()">
                                    @endif
                                    <h2>Hi: {{Auth::user()->fullname}}</h2>
                                </div>
                            @endif
                            <hr>

                            @php($id = Auth::user()->id)
                            <a href="{{ route('account.create', ['id' => $id]) }}" class="sub-menu-link">
                                <img src="{{asset('images/profile.png')}}" alt="">
                                <p>Profile</p>
                                <span>></span>
                            </a>

                            <a href="{{route('p_manage')}}" class="sub-menu-link">
                                <img src="{{asset('images/donated.png')}}" alt="">
                                <p>Donated</p>
                                <span>></span>
                            </a>


                            <a href="{{route('logout')}}" class="sub-menu-link">
                                <img src="{{asset('images/logout.png')}}" alt="">
                                <p>Logout</p>
                                <span>></span>
                            </a>


                        </div>
                    </div>
                @else
                    <li><a href="{{ route('login_register') }}">Register/Login</a></li>
                @endauth

            </nav>
        </div>
    </div>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-------- footer -------->
    <footer>
        @yield('footer')
    </footer>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");

        }
    </script>
</body>

</html>
