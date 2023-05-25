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
                    <img src="{{ asset('storage/prod_image/' . $product->img) }}">
                </div>
            </div>
            <div class="product-div-right">
                <span class="product-name">{{$product->prod_name}}</span>
                <span class="product-price">Condition: {{$product->condition}}%</span>
                <h4 style="margin-bottom:10px">Category: {{$category}} </h4>
                <h4 style="margin-bottom:10px">Size: {{$product->size}}</h4>
                <h5 style="margin-bottom:5px">Material: {{$product->material}}</h5>
                <h5 style="margin-bottom:5px">Buy_date: {{ date('d F Y', strtotime($product->buy_date)) }}</h5>
                
                <p class="product-description">{{$product->descr}}.</p>
            </div>
            <div class="user-infor">
                <div class="user-title">Post_user</div>
                <div class="user-location">Location: {{$user->address}}</div>
                <div class="user-phone">Contact: {{$user->phone}}</div>
                <div class="user-link">link: {{$user->link}}</div>
            </div>
        </div>
    </div>
</div>
@endsection

