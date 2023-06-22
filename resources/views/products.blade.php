@extends('layouts.layout')

@section('title')
    Items
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styleProducts.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        $(function() {
            var sizes = [];
            var categories = [];

            $("#slider-range").slider({
                range: true,
                max: 100,
                values: [50, 99],
                slide: function(event, ui) {
                    $("#amount").val(ui.values[0] + "%" + " - " + ui.values[1] + "%");
                    condition = $("#amount").val();
                    filterProducts();
                }
            });

            $('.size').click(function() {
                sizes = [];
                $('.size:checked').each(function() {
                    sizes.push($(this).val());
                });
                filterProducts();
            });

            $('.category').click(function() {
                categories = [];
                $('.category:checked').each(function(){
                    categories.push($(this).val());
                });
                filterProducts();
            });

            $("#sort").on('change' , function() {
                sort = $(this).val();
            });

            function filterProducts() {
                var sort = $("#sort").val() ;
                var condition = $("#amount").val();
                var data = {
                    condition: condition,
                    sizes: sizes,
                    categories : categories,
                    sort : sort
                };
                $.ajax({
                    type: "GET",
                    url: "{{ route('filter_products')}}",
                    data: data,
                    success: function(response) {
                        $('#pro_container').html(response);
                        if ($('.pro').length >= 1) {
                            $('#value_count').text("Showing all " + $('.pro').length + " results");
                        } else {
                            $('#value_count').text("Nothing found");
                        }
                    }
                });
            }
        });
    </script>
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

                <div class="col-lg-3 blog-form p-5" style="height :  1200px">
                    <h2 class="blog-sidebar-title"><b>Categories</b></h2>
                    <hr>
                    <div >
                        @foreach ($cate_products as $cate_product)
                            <div class="mb-2">
                                {{-- <p class="blog-sidebar-list"><b><span class="list-icon"> &gt; </span> {{$cate_product-> category_name}}</b></p> --}}
                                <label for="{{$cate_product-> category_name}}" class="blog-sidebar-list">
                                    <input class="category" type="checkbox" class="list-icon" value="{{$cate_product-> id}}"> {{$cate_product-> category_name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div>&nbsp;</div>
                    <h2 class="blog-sidebar-title"><b>Filter</b></h2>
                    <hr>

                    {{-- <div class="input-group mb-3">
                        <div style="width: 100%" >
                            <label style="width: 100%" for="condition">Condition</label>
                            <input style="width:75%" type="range" name="condition" id="con_range" placeholder="Condition" min="1" max="100"   oninput="this.nextElementSibling.value = this.value " />
                            <output>50</output>
                            <label >%</label>
                        </div>				 --}}
                    <div class="mb-3">
                        <p>
                            <label for="amount">Condition</label>
                        <div id="slider-range"></div>
                        </p>
                        <input size="6" type="text" id="amount" value="50% - 99%" readonly style="border:0; color:rgb(193, 66, 87); font-weight:bold">

                        {{-- <div style="width: 100%">
                            <label style="width: 100%" for="size">Size</label>
                            <input style="width:75%" type="range" name="condition" id="" placeholder="Condition" min="1" max="36"  oninput="this.nextElementSibling.value = this.value" />
                            <output>18</output>
                        </div> --}}





                    </div>
                    <label for="size">Size</label>
                    <div>
                        @for($size=1 ; $size<13 ; $size++)
                            <label >
                                <input type="checkbox" class="size" value="{{$size}}"> {{$size}}
                            </label>
                        @endfor
                        <label >
                            <input type="checkbox" class="size" value="13" >Over size
                        </label>

                        @for($size=16 ; $size<36 ; $size++)
                            <label >
                                <input type="checkbox" class="size" value="{{$size}}"> {{$size}}
                            </label>
                        @endfor
                    </div>

                    {{-- <button type="button" class="btn btn-dark btn-lg">Filter</button>

                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <h2 class="blog-sidebar-title"><b>Tags</b></h2>				 --}}


                </div>
                <!--END  <div class="col-lg-3 blog-form">-->

                <div class="col-lg-9 mw-20">
                    <div class="row" >
                        @if($products->count() >=1)
                            <h3 class="col" style="font-wegiht:400" id="value_count">
                                Showing all {{$products->count()}} results
                            </h3>


                        @else
                            <h3 class="col" style="font-wegiht:400" id="value_count">Nothing found</h3>
                        @endif



                        <div class="col text-center" style="max-width:20%">
                            <select class="form-control" id="sort">
                                <option value="id">Default Sorting</option>
                                <option value="condition">Sorting by condition</option>
                                <option value="size">Sorting by size</option>
                                <option value="buy_date">Sorting by buy_date</option>>
                                <option value="update_at">Sorting by posting_date</option>
                            </select>
                        </div>

                    </div>
                    <!-- Sorting by <div class="row"> -->
                    <!-- Sorting by <div class="row"> -->

                    <div class="row" >
                        <div class="col-sm-3 col-md-6 col-lg-3" id="pro_container" style="width:100%">
                            @include('search_result')
                        </div>
                    </div>

                </div>
                <!-- Sorting by <div class="row"> -->

            </div>
            <!--END  <div class="col-lg-9">-->

        </div>
        </div>
    </section>
    <script>
        // 	$('#amount').on('change',function(){
        // 		alert("1");
        // 	// 	var condition = $("#amount").val();
        // 	// $.ajax({
        //     //    type : "GET",
        //     //    url : "{{ route('filter_products')}}",
        // 	//    data : 'condition=' + condition ,
        // 	//    success : function(response){
        // 	// 	   $('.pro_container').html(response);
        // 	//    }
        // 	// })
        // 	})
        // })s
        $("#amount").on("input propertychange",function(){
            console.log("1");
// Do your thing here.
        });
    </script>
    {{-- </body> --}}
@endsection
{{--
</html>
--}}
