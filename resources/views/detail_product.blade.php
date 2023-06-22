@extends('layouts.layout')

@section('title')
    Website for Baby-Kid
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleDetail_product.css') }}">
    <link rel="stylesheet"
          href="{{ asset('https://fonts.googloapis.com/css2? family-Poppins:wght@300;400;500;600;700&display=swap') }}">
@stop

@section('scripts')
@stop

@section('content')
    <div class="main-wrapper">
        <div class="container">
            <div class="product-div">
                <div class="product-div-left">
                    <div class="img-container">
                        <img style="width: 400px; height: 400px;" src="{{ asset('storage/prod_image/' . $product->img) }}">
                    </div>
                </div>
                <div class="product-div-right" style="margin-left: -200px;">
                    <span class="product-name">{{$product->prod_name}}</span>
                    <span style="font-size: 30px; font-weight: 500" class="product-price">Condition: {{$product->condition}}%</span>
                    <h2 style="margin-bottom:10px">Category: {{$category}} </h2>
                    <h2 style="margin-bottom:10px">Size: {{$product->size}}</h2>
                    <h3 style="margin-bottom:5px">Material: {{$product->material}}</h3>
                    <h3 style="margin-bottom:5px">Buy_date: {{ date('d F Y', strtotime($product->buy_date)) }}</h3>

                    <h3 class="product-description">{{$product->descr}}.</h3>
                </div>
                <div style="display: flex; position: relative;">
                    <div class="user-info">
                        <div class="user-title"><h3>Post user</h3></div>
                        <div class="user-location">Location: {{$user->address}}</div>
                        <div class="user-phone">Contact: {{$user->phone}}</div>
                        <div class="user-link">Link: {{$user->link}}</div>
                    </div>
                    <img style="width: 200px;
                        height: 200px;
                        border-radius: 50%;
                        position: absolute;
                        left: 15pc;
                        top: 72px;
                    "
                         src="{{asset('storage/avatar/' . $user->avatar)}}"/>
                </div>
            </div>
        </div>
    </div>
@endsection
