{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleProducts.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css') }}">

    <title>Document</title>
</head> --}}


{{-- <body>
    <section class="header">
        <div class="navbar">
            <div class="logo">
                <a href="{{ asset('index.html') }}"><img src="{{ asset('images/logo.png') }}" width="180px"
                        style="margin-left: 10px;"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a class="active" href="{{ route('products') }}">Products</a></li>
                    <li><a href="{{ route('upload') }}">Donate</a></li>
                    <li><a href="#">Account</a></li>
                    <li><a href="{{ route('login_register') }}">Register/Login</a></li>
                </ul>
            </nav>
    </section> --}}
@extends('layouts.layout')

@section('title')
    Items
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styleProducts.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css') }}">
@stop

@section('content')
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <div class="pro-container">
            @foreach ($products as $product)
                <div class="pro">
                    <img src="{{ asset('storage/prod_image/' . $product->img) }}">
                    <div class="des">
                        <li>{{ $product->prod_name }}</li>
                        <li>{{ $product->descr }}</li>
                        <li>{{ $product->condition }}</li>
                        <li>{{ $product->material }}</li>
                    </div>
                    <a href=""><i class="fa-solid fa-message message"></i></a>
                </div>
            @endforeach


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
        </div>

    </section>
    {{-- </body> --}}
@endsection
{{-- </html> --}}
