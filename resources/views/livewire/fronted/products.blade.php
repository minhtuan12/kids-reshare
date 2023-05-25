<div>
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
</div>