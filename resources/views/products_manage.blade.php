@php use App\Models\Category; @endphp
@extends('layouts.layout')

@section('title')
    Donated
@endsection

@section('styles')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Raleway') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleUpload.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@stop

@section('scripts')
    <script src="{{ asset('https://use.fontawesome.com/6f636db11c.js') }}"></script>
    <script>
        // function deleteProduct(id) {
        //     if (confirm('Are you sure you want to delete this product?')) {
        //         // Send a request to the backend to delete the product
        //         // You can use AJAX or fetch to send the request
        //         fetch('/p_manage/delete/' + id, {
        //             method: 'DELETE' })
        //             .then(response => response.json())
        //             .then(data => {
        //                 if (data.success) {
        //                     // Product deleted successfully, remove the row from the table
        //                     const row = document.getElementById(product_${id});
        //                     row.parentNode.removeChild(row);
        //                 } else {
        //                     // Handle error if the deletion was not successful
        //                     alert('Failed to delete the product.');
        //                 }
        //             })
        //             .catch(error => {
        //                 console.error('Error:', error);
        //                 alert('An error occurred while deleting the product.');
        //             });
        //     }
        // }
    </script>
@stop

@section('content')
    <h2 style="text-align:center">Donated</h2>
    <div class="container" style="margin-top: 30px">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Condition</th>
                <th scope="col">Post_date</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                @php($cate = Category::find($product->category_id)->category_name)
                <tr id="product_{{ $product->id }}">
                    <td>{{ $product->prod_name }}</td>
                    <td>{{ $cate }}</td>
                    <td>{{ $product->condition}}%</td>
                    <td>{{ $product->created_at}}</td>
                    <td style="display: flex">
                        <a href="/products/{{ $product->id }}"><i class="material-icons" data-toggle="tooltip" title="View">&#xE8F4;</i></a>
                        <form action="{{  route('delete_product', ['id' => $product->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="" onclick="deleteProduct({{ $product->id }})"><button style="border: none" type="submit"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button></a>
                        </form>
                        {{-- <a href="" onclick="deleteProduct({{ $product->id }})"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> --}}

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
