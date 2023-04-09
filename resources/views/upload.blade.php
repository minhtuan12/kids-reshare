{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Raleway') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleUpload.css') }}">
    <title>Document</title>
</head> --}}

@extends('layouts.layout')

@section('title')
    Upload
@endsection

@section('styles')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Raleway') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleUpload.css') }}">
@stop

@section('scripts')
    <script src="{{ asset('https://use.fontawesome.com/6f636db11c.js') }}"></script>
@stop

@section('content')

    <body>
        {{-- <section class="header">
            <div class="navbar">
                <div class="logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" width="180px"
                            style="margin-left: 10px;"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a class="active" href="{{ route('upload') }}">Donate</a></li>
                        <li><a href="#">Account</a></li>
                        <li><a href="{{ route('login_register') }}">Register/Login</a></li>
                    </ul>
                </nav>
        </section> --}}

        <div class="card">
            <div class="card_header">
                <strong><i class="fa fa-plus"></i> Add New Product</strong>
            </div>
            <div class="card_body">
                <form action="{{ route('upload') }}" method="post" style="display:grid" enctype="multipart/form-data">

                    @csrf
                    <label for="name">Name new product</label>
                    <input type="text" name="prod_name" id="" placeholder="Name new product" />

                    <label for="buy_date">Buy date</label>
                    <input type="date" name="buy_date" id="" placeholder="Buy date" />

                    <label for="condition">Condition</label>
                    <input type="number" name="condition" id="" placeholder="Condition" />

                    <label for="material">Material</label>
                    <input type="text" name="material" id="" placeholder="Marterial" />

                    <label for="note" class="col-form-label">Description</label>
                    <textarea name="descr" id="" rows="5" class="form-control" placeholder="Description"
                        style="margin: 5px;"></textarea>
                    <input type="file" name="file" required>
                    <button type="submit">
                        <i class="fa fa-check-circle" style="padding-right: 5px;"></i>Save
                    </button>
                </form>
            </div>
        </div>
        {{-- <script src="{{ asset('https://use.fontawesome.com/6f636db11c.js') }}"></script> --}}
    </body>
@endsection
{{-- </html> --}}
