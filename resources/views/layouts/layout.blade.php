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
        <div class="navbar">
            <div class="logo">
                <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" width="180px"
                        style="margin-left: 10px;"></a>
            </div>
            <nav>
                <ul style="margin-bottom:0">
                    <li><a class="active1" href="{{ route('index') }}">Home</a></li>
                    <li><a class="active2" href="{{ route('products') }}">Products</a></li>
                    <li><a class="active3"href="{{ route('upload') }}">Donate</a></li>
                  </ul>
                    @auth
                    <img class="user-pic"  src="{{asset('images/personal.png')}}" onclick="toggleMenu()" >
                    <div class="sub-menu-wrap" id="subMenu">
                      <div class="sub-menu">
                        @if(isset(Auth::user()->fullname))
                          <div class="user-infor">
                            <img class="user-pic" src="{{asset('images/personal.png')}}" >
                            <h2>Hi: {{Auth::user()->fullname}}</h2>
                          </div>
                        @endif
                        <hr>

                        <a href="{{ route('account') }}" class="sub-menu-link">
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
        
          function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        
          }
          </script> 
</body>

</html>