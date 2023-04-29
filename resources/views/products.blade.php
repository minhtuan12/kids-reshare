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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
@stop

@section('content')
    {{-- <section id="product1" class="section-p1">
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
</section> --}}
    <h1 style="text-align: center ; margin-top : 50px"> All Products</h1>
    <section class="page-section">
        <div class="container">
            <div class="row">
                <form action="/products" method="get">
                    {{ csrf_field() }}
                    <div class="col-lg-3 blog-form p-5">
                        <h2 class="blog-sidebar-title"><b>Cart</b></h2>
                        <hr>
                        <p class="blog-sidebar-text">No products in the cart...</p>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>

                        <h2 class="blog-sidebar-title"><b>Categories</b></h2>
                        <hr>
                        @foreach ($cate_products as $cate_product)
                            <input type="radio" name="category" class="blog-sidebar-list"
                                value="{{ $cate_product->category_name }}"><b>{{ $cate_product->category_name }}</b> <br>
                        @endforeach
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>

                        <h2 class="blog-sidebar-title"><b>Filter</b></h2>
                        <hr>

                        {{-- <div class="input-group mb-3">
                            <div style="width: 100%">
                                <label style="width: 100%" for="condition">Condition</label>
                                <input style="width:75%" type="range" name="condition" id=""
                                    placeholder="Condition" min="1" max="100"
                                    oninput="this.nextElementSibling.value = this.value " />
                                <output>50</output>
                                <label>%</label>
                            </div>

                            <div style="width: 100%">
                                <label style="width: 100%" for="size">Size</label>
                                <input style="width:75%" type="range" name="condition" id=""
                                    placeholder="Condition" min="1" max="36"
                                    oninput="this.nextElementSibling.value = this.value" />
                                <output>18</output>
                            </div>
                        </div> --}}
                        
                </form>
                <form action="{{ route('products.filter') }}" method="POST">
                    {{ csrf_field() }}

                    <input type="text" name="category" />

                    <input type="submit" value="Filter" />
                </form>
        
                <button type="submit" class="btn btn-dark btn-lg">Filter</button>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <h2 class="blog-sidebar-title"><b>Tags</b></h2>
                <p class="product-sidebar-list"><b>#accessory, #arabica</b></p>
                <p class="product-sidebar-list"><b>#candy, #bean, #cup</b></p>
                <p class="product-sidebar-list"><b>#ethopian, #latte</b></p>


            </div>
            <!--END  <div class="col-lg-3 blog-form">-->

            <div class="col-lg-9 mw-20">
                <div class="row">
                    <div class="col">
                        Showing all 9 results
                    </div>

                    <div class="col text-center" style="max-width:20%">
                        <select class="form-control">
                            <option value="">Default Sorting</option>
                            <option value="popularity">Sorting by popularity</option>
                            <option value="average">Sorting by average</option>
                            <option value="latest">Sorting by latest</option>
                            <option value="low">Sorting by low</option>
                            <option value="high">Sorting by high</option>
                        </select>
                    </div>

                </div>
                <!-- Sorting by <div class="row"> -->
                <div>&nbsp;</div>
                <div>&nbsp;</div>

                <!-- Sorting by <div class="row"> -->

                <div>&nbsp;</div>
                <div>&nbsp;</div>

                <div class="row">
                    <div class="col-sm-3 col-md-6 col-lg-4">
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
                    </div>
                </div>

                <!-- Sorting by <div class="row"> -->
                <div>&nbsp;</div>
                <div>&nbsp;</div>

                <div class="row">
                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="img/coffee_item1.jpg" class="product-image">
                                <h5 class="card-title"><b>Gold Accessory</b></h5>
                                <p class="card-text small">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <p class="tags">Price $16</p>
                                <a href="#" class="btn btn-success button-text"><i class="fa fa-shopping-cart"
                                        aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="img/coffee_item2.jpg" class="product-image">
                                <h5 class="card-title"><b>Lating Accessory</b></h5>
                                <p class="card-text small">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <p class="tags">Price $26</p>
                                <a href="#" class="btn btn-success button-text"><i class="fa fa-shopping-cart"
                                        aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="img/coffee_item6.jpg" class="product-image">
                                <h5 class="card-title"><b>American Black Coffee</b></h5>
                                <p class="card-text small">With supporting text below as a natural lead-in to
                                    additional
                                    content.</p>
                                <p class="tags">Price $50</p>
                                <a href="#" class="btn btn-success button-text"><i class="fa fa-shopping-cart"
                                        aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Sorting by <div class="row"> -->



            </div>
            <!--END  <div class="col-lg-9">-->

        </div>
        </div>
    </section>
    {{-- </body> --}}
@endsection
{{-- </html> --}}
