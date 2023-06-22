{{--
<!DOCTYPE html>
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
                </divcate <nav>
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

                <label for="name">Category</label>
                {{-- <input type="text" name="category" id="" placeholder="Category" /> --}}
                <select id="my_select" name="category" onchange="myFunction(this.options[this.selectedIndex].value)">
                    @foreach($cate_products as $cate_product)
                        <option value="{{$cate_product ->id}}">{{$cate_product->category_name}}</option>
                    @endforeach
                </select>

                <label for="buy_date">Buy date</label>
                <input type="date" name="buy_date" id="" placeholder="Buy date" />


                <label id="size_clothesc" for="size_clothes">Size</label>
                <select  id="size_clothes" name="size_clothes">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">Over Size</option>
                </select>

                <label id="size_shoess" for="size_shoes" style="display: none">Size</label>
                <select id="size_shoes" style="display: none" name="size_shoes">
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                </select>

                <label for="material">Material</label>
                <input type="text" name="material" id="" placeholder="Marterial" />


                <label for="condition">Condition</label>
                <input style="width:20%" type="range" name="condition" id="" placeholder="Condition" min="1" max="100"  oninput="this.nextElementSibling.value = this.value" />
                <output style="display: flex">50%</output>

                <label for="note" class="col-form-label">Description</label>
                <textarea name="descr" id="" rows="5" class="form-control" placeholder=" Description"
                          style="margin: 5px; resize: none"></textarea>
                <input type="file" name="img" required>
                <button type="submit">
                    <i class="fa fa-check-circle" style="padding-right: 5px;"></i>Save
                </button>
            </form>
        </div>
    </div>
    {{-- <script src="{{ asset('https://use.fontawesome.com/6f636db11c.js') }}"></script> --}}
    <script>
        console.log(1);
        const el = document.getElementById("my_select");
        console.log(el);
        function myFunction(value) {
            console.log(value);
            if( value ==1 ) {
                document.getElementById("size_shoes").style.display = "none";
                document.getElementById("size_shoess").style.display = "none";
                document.getElementById("size_clothes").style.display = "block";
                document.getElementById("size_clothesc").style.display = "block";
            }
            else if( value ==2 ) {
                document.getElementById("size_shoes").style.display = "block";
                document.getElementById("size_shoess").style.display = "block";
                document.getElementById("size_clothes").style.display = "none";
                document.getElementById("size_clothesc").style.display = "none";
            }
            else {
                document.getElementById("size_shoes").style.display = "none";
                document.getElementById("size_shoess").style.display = "none";
                document.getElementById("size_clothes").style.display = "none";
                document.getElementById("size_clothesc").style.display = "none";
            }
        }
    </script>

    <script>
        function updateTextInput(val) {
            document.getElementById('textInput').value=val;
        }
    </script>
    </body>
@endsection
{{--

</html> --}}
