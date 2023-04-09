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
    @yield('js')

</head>

<body>
    <div class="header">
        <div class="navbar">
            <div class="logo">
                <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" width="180px"
                        style="margin-left: 10px;"></a>
            </div>
            <nav>
                <ul>
                    <li><a class="active" href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('products') }}">Products</a></li>
                    <li><a href="{{ route('upload') }}">Donate</a></li>
                    <li><a href="#">Account</a></li>
                    @auth
                        <li><a href="{{ route('logout') }}">Log out</a></li>
                    @else
                        <li><a href="{{ route('login_register') }}">Register/Login</a></li>
                    @endauth
                </ul>
            </nav>
        </div>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-------- footer -------->
        <footer>
            @yield('footer')
        </footer>

</body>

</html>
