@extends('layouts.layout')

@section('title')
    Website for Baby-Kid
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://fonts.googloapis.com/css2? family-Poppins:wght@300;400;500;600;700&display=swap') }}">
@stop

@section('scripts')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                <h1> VALUE YOUR BABY</h1>
                <p>Discover fashionable and comfortable items for your babies</p>
                <a href="#" class="btn"> Explore now</a>
            </div>
            <div class="col-2">
                <img src="{{ asset('images/baby1.jpg') }}">
            </div>

        </div>
    </div>
    </div>

    <!-------New Product ----->

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <div class="pro-container">
            <div class="pro">
                <img src="{{ asset('images/clo1.jpg') }}" alt="">
                <div class="des">
                    <span>Shirt</span>
                    <h5>Shirt for baby girl</h5>
                    <h6>Location :Ha Noi</h6>
                    <p></p>
                </div>
                <a href="#"><i class="fa-solid fa-message message"></i></a>
            </div>
            <div class="pro">
                <img src="{{ asset('images/clo1.jpg') }}" alt="">
                <div class="des">
                    <span>Shirt</span>
                    <h5>Shirt for baby girl</h5>
                    <h6>Location :Ha Noi</h6>
                    <p></p>
                </div>
                <a href=""><i class="fa-solid fa-message message"></i></a>
            </div>
            <div class="pro">
                <img src="images/clo1.jpg" alt="">
                <div class="des">
                    <span>Shirt</span>
                    <h5>Shirt for baby girl</h5>
                    <h6>Location :Ha Noi</h6>
                    <p></p>
                </div>
                <a href=""><i class="fa-solid fa-message message"></i></a>
            </div>
            <div class="pro">
                <img src="images/clo1.jpg" alt="">
                <div class="des">
                    <span>Shirt</span>
                    <h5>Shirt for baby girl</h5>
                    <h6>Location :Ha Noi</h6>
                    <p></p>
                </div>
                <a href=""><i class="fa-solid fa-message message"></i></a>
            </div>
    </section>
@endsection

@section('footer')
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="{{ asset('images/play-store.jpg') }}">
                        <img src="{{ asset('images/app-store') }}">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="{{ asset('images/logo.jpg') }}">
                    <p>Our Aims is to satisfy all our customers and put a smile on their face.</p>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-------- footer -------->
{{-- <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col-1">
                            <h3>Download our App</h3>
                            <p>Download App for Android and ios mobile phone.</p>
                            <div class="app-logo">
                                <img src="{{ asset('images/play-store.jpg') }}">
                                <img src="{{ asset('images/app-store') }}">
                            </div>
                        </div>
                        <div class="footer-col-2">
                            <img src="{{ asset('images/logo.jpg') }}">
                            <p>Our Aims is to satisfy all our customers and put a smile on their face.</p>
                        </div>
                        <div class="footer-col-4">
                            <h3>Follow us</h3>
                            <ul>
                                <li>Facebook</li>
                                <li>Twitter</li>
                                <li>Instagram</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var msg = '{{ Session::get('success') }}';
                var exist = '{{ Session::has('success') }}';
                if (exist) {
                    alert(msg);
                }
            </script> --}}
{{-- </body> --}}

{{-- </html> --}}
