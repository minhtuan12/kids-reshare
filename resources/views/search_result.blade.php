@if($products->count() >=1)

        @foreach ($products as $product)
		
        <div class="pro" >
            <a href="/products/{{ $product->id }}"><img src="{{ asset('storage/prod_image/' . $product->img) }}"></a>
            <div class="des">
                <li>{{ $product->prod_name }}</li>
                <li>{{ $product->descr }}</li>
                <li>{{ $product->condition }}</li>
                <li>{{ $product->material }}</li>
            </div>
        </div>
        @endforeach
{{-- @else 
    <h2>Nothing Found</h2> --}}
@endif	
<script>
    console.log($products);
</script>
