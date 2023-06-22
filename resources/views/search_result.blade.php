@if($products->count() >= 1)
    <div class="row">
        @php $columnCount = 0; @endphp
        @foreach ($products as $product)
            @if ($columnCount % 3 === 0 && $columnCount !== 0)
    </div>
    <div class="row">
        @endif
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="pro" style="height:410px; width: 210px">
                <a href="/products/{{ $product->id }}"><img
                        src="{{ asset('storage/prod_image/' . $product->img) }}"></a>
                <div class="des">
                    @if(isset($product->prod_name))
                        <li style="height: 72px; width: 210px;"><strong>Name:</strong> {{ $product->prod_name }}</li> <br/>
                    @endif
{{--                    @if(isset($product->descr))--}}
{{--                        <li><strong>Description:</strong> {{ $product->descr }}</li> <br/>--}}
{{--                    @endif--}}
                    @if(isset($product->condition))
                        <li><strong>Condition:</strong> {{ $product->condition }}%</li> <br/>
                    @endif
                    @if(isset($product->material))
                        <li><strong>Material:</strong> {{ $product->material }}</li> <br/>
                    @endif
                </div>
            </div>
        </div>
        @php $columnCount++; @endphp
        @endforeach
    </div>
    {{-- @else
        <h2>Nothing Found</h2> --}}
@endif
