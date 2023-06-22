{{-- @extends('layouts.layout')--}}

{{--@section('title')--}}
{{--    Kids' Information--}}
{{--@endsection--}}

{{--@section('styles')--}}
{{--@stop--}}

{{--@section('scripts')--}}
{{--@stop--}}

{{--@section('content')--}}
{{--    --}}{{-- user's data --}}
{{-- <b>My Account</b> <br>--}}
{{--    User Info <br><br>--}}
{{--    <div>--}}
{{--        <label for="">--}}
{{--            <span>Full Name</span>--}}
{{--            <span>{{ $user_data->fullname }}</span>--}}
{{--        </label> <br>--}}
{{--        <label for="">--}}
{{--            <span>Phone</span>--}}
{{--            <span>{{ $user_data->phone }}</span>--}}
{{--        </label> <br>--}}
{{--        <label for="">--}}
{{--            <span>Address</span>--}}
{{--            <span>{{ $user_data->address }}</span>--}}
{{--        </label> <br>--}}
{{--        <label for="">--}}
{{--            <span>Created At</span>--}}
{{--            <span>{{ $user_data->created_at }}</span>--}}
{{--        </label> <br>--}}
{{--        @php($id = Auth::user()->id)--}}
{{--        <button> <a href="{{ route('account.update', ['id' => $id]) }}">Change</a></button>--}}
{{--    </div> <br> <br>--}}


{{--    --}}{{-- Kids' info --}}
{{-- Kid Info <br><br>--}}
{{--    <form action="{{ route('account.store', ['id' => $id]) }}" method="POST">--}}
{{--        @csrf--}}

{{--        <label>--}}
{{--            <span>Number of child</span>--}}
{{--            <select name="child_num">--}}
{{--                <option type="radio" value="1">1</option>--}}
{{--                <option type="radio" value="2">2--}}
{{--                <option type="radio" value="3">3--}}
{{--                <option type="radio" value="4">4--}}
{{--            </select>--}}
{{--        </label>--}}
{{--        <label>--}}
{{--            <span>Date of birth</span>--}}
{{--            <input required type="date" name="age" class="">--}}
{{--        </label>--}}
{{--        <label>--}}
{{--            <span>Gender</span>--}}
{{--            <input type="radio" id="male" name="gender" value="1">--}}
{{--            <label for="">Male</label>--}}
{{--            <input type="radio" id="female" name="gender" value="0">--}}
{{--            <label for="">Female</label><br>--}}
{{--        </label>--}}
{{--        <label for="">--}}
{{--            <span>Height</span>--}}
{{--            <input required type="number" name="height" placeholder="Height">--}}
{{--            <span>Weight</span>--}}
{{--            <input required type="number" name="weight" placeholder="Weight">--}}
{{--        </label>--}}
{{--        <label>Note</label>--}}
{{--        <textarea name="note" placeholder="Note"></textarea>--}}
{{--        <input type="submit" value="Save">--}}
{{--    </form> --}}

{{-- @endsection --}}


{{--@extends('layouts.layout')--}}

{{--@section('title')--}}
{{--    Kids' Information--}}
{{--@endsection--}}

{{--@section('styles')--}}
{{--    <link rel="stylesheet" href="{{ asset('css/styleProducts.css') }}">--}}
{{--    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">--}}
{{--    <link rel="stylesheet" href="{{asset('css/account.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/uploadImage.css')}}">--}}
{{--    --}}{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
{{--@stop--}}

{{--@section('scripts')--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
{{--    <script type="text/javascript">--}}
{{--        var baby_count = 0;--}}
{{--        $(document).ready(function () {--}}
{{--            $(".add-row").click(function () {--}}
{{--                var $clone = $("div.baby_details").first().clone();--}}
{{--                $clone.append("<button type='button' class='remove-row'>-</button>");--}}
{{--                $clone.insertBefore(".add-row");--}}
{{--                baby_count++;--}}
{{--            });--}}

{{--            $(".form-style-9").on("click", ".remove-row", function () {--}}
{{--                $(this).parent().remove();--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--    <script>--}}
{{--        var loadFile = function (event) {--}}
{{--            var output = document.getElementById('output');--}}
{{--            output.src = URL.createObjectURL(event.target.files[0]);--}}
{{--            output.onload = function () {--}}
{{--                URL.revokeObjectURL(output.src) // free memory--}}
{{--            }--}}
{{--        };--}}
{{--    </script>--}}
{{--@stop--}}

{{--@section('content')--}}
{{--    @php($id = Auth::user()->id)--}}
{{--    <div class="flex flex-col md:flex-row">--}}
{{--        <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">--}}
{{--            <div class="bg-gray-800 pt-3 mb-25">--}}
{{--                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">--}}
{{--                    <h1 class="font-bold pl-2">Account</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @if ($message = Session::get('success'))--}}
{{--                <div style="text-align: center; font-size: 24px;" class="alert alert-success alert-block">--}}
{{--                    <strong>{{$message}}</strong>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            <div class="account-wrapper">--}}
{{--                <div class="mt-25" style="margin: 25px">--}}
{{--                    <form action="{{ route('account.update', ['id' => $id]) }}" method="POST" class="w-full max-w-lg "--}}
{{--                          enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        @method('patch')--}}

{{--                        <div style="display: flex">--}}
{{--                            <div style="margin-right: 70px; margin-left: -70px;">--}}
{{--                                <div class="row row-images">--}}
{{--                                    <label for="image">Images*</label>--}}
{{--                                    <div class="column image_container">--}}
{{--                                        <div class="post-image-collection">--}}
{{--                                            <label class="post-image post-image-placeholder mrm mts empty">--}}
{{--                                                <input type="file" id="avatar" name="avatar" accept="image/*"--}}
{{--                                                       onchange="loadFile(event)"/>--}}
{{--                                                <span class="icon-camera"><img alt=""--}}
{{--                                                                               src="https://cdn.onlinewebfonts.com/svg/img_134042.png"></span>--}}
{{--                                                <p class="uppercase">Photo</p>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                --}}{{--                        <img alt="avatar" src="{{ asset('storage/avatar/' . $user_data->avatar) }}"/>--}}
{{--                                <img--}}
{{--                                    style="margin-left: -40px; margin-top: 32px; width: 200px; height: 160px; border-radius: 50%"--}}
{{--                                    id="output"/>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class=>--}}
{{--                                    <label--}}
{{--                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"--}}
{{--                                        for="grid-first-name">--}}
{{--                                        Username--}}
{{--                                    </label>--}}
{{--                                    <input--}}
{{--                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"--}}
{{--                                        id="grid-first-name" name="fullname" type="text"--}}
{{--                                        value="{{ $user_data->fullname }}">--}}
{{--                                </div>--}}
{{--                                <div class=>--}}
{{--                                    <label--}}
{{--                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"--}}
{{--                                        for="grid-last-name">--}}
{{--                                        Phone--}}
{{--                                    </label>--}}
{{--                                    <input--}}
{{--                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"--}}
{{--                                        id="grid-last-name" name="phone" type="text"--}}
{{--                                        value="{{ $user_data->phone }}">--}}
{{--                                </div>--}}
{{--                                <div style="margin-top: 14px;">--}}
{{--                                    <label--}}
{{--                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"--}}
{{--                                        for="grid-password">--}}
{{--                                        Password--}}
{{--                                    </label>--}}
{{--                                    <input--}}
{{--                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"--}}
{{--                                        id="grid-password" name="password" type="password"--}}
{{--                                        placeholder="******************">--}}
{{--                                </div>--}}
{{--                                <div class=>--}}
{{--                                    <label--}}
{{--                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"--}}
{{--                                        for="grid-city">--}}
{{--                                        Address--}}
{{--                                    </label>--}}
{{--                                    <input--}}
{{--                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"--}}
{{--                                        id="grid-city" name="address" type="text" value="{{$user_data->address}}">--}}
{{--                                </div>--}}
{{--                                <div style="margin-top: 14px;">--}}
{{--                                    <label--}}
{{--                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"--}}
{{--                                        for="grid-city">--}}
{{--                                        Link--}}
{{--                                    </label>--}}
{{--                                    <input--}}
{{--                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"--}}
{{--                                        id="grid-city" name="link" type="text" value="{{$user_data->link}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div style="margin-left: -85px; margin-top: -51px;">--}}
{{--                            <button type="submit"--}}
{{--                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"--}}
{{--                                    style="margin:10px 5px 5px 10px  ">--}}
{{--                                Update--}}
{{--                            </button>--}}
{{--                            --}}{{-- <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"--}}
{{--                                style="margin:10px 5px 5px 10px  ">--}}
{{--                                Accept--}}
{{--                            </button> --}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            --}}{{-- kids data --}}
{{--            <form action="{{ route('kidStore', ['id' => $id]) }}" method="POST" class="form-style-9">--}}
{{--                @csrf--}}

{{--                <div class="form-group">--}}
{{--                    <div class="baby_details" name="kids">--}}
{{--                        --}}{{-- <form id="baby_1" style="display:block"> --}}
{{--                        <li>--}}
{{--                            <ul class="column">--}}
{{--                                <li>--}}
{{--                                    <label for="name">Date of birth</label>--}}
{{--                                    <input type="date" name="age" id=""/>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <ul class="column">--}}
{{--                                <li>--}}
{{--                                    --}}{{--<label for="name">Gender</label>--}}
{{--                                    <select name="gender" id="">--}}
{{--                                        <option selected disabled>--Gender--</option>--}}
{{--                                        <option value="0">Male</option>--}}
{{--                                        <option value="1">Female</option>--}}
{{--                                    </select>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <ul class="column">--}}
{{--                                <li>--}}
{{--                                    <label for="buy_date">Height</label>--}}
{{--                                    <input type="number" name="height" id="" placeholder="Height"/>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <ul class="column">--}}
{{--                                <li>--}}
{{--                                    <label for="material">Weight</label>--}}
{{--                                    <input type="number" name="weight" id="" placeholder="Weight"/>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <ul class="column">--}}
{{--                                <li>--}}
{{--                                    <label for="note" class="col-form-label">Note</label>--}}
{{--                                    <textarea name="take_note" id="" rows="4" class="form-control"--}}
{{--                                              placeholder=" Note"--}}
{{--                                              style="margin: 5px; resize: none;"></textarea>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </div>--}}

{{--                    <button type="button" class="add-row">Add</button>--}}
{{--                    --}}{{-- </form> --}}
{{--                    <button type="submit">--}}
{{--                        <i class="fa fa-check-circle" style="padding-right: 5px;"></i>Save--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            <div class="kids_detail">--}}
{{--                <div class="card">--}}
{{--                    <div class="card_header">--}}
{{--                        <strong><i class="fa fa-plus"></i>Kids</strong>--}}
{{--                    </div>--}}

{{--                    @foreach($kids as $kid)--}}
{{--                        <form action="{{ route('updateKid', ['id' => $id]) }}" method="post" id="kids_form"--}}
{{--                              style="display:grid">--}}
{{--                            @csrf--}}
{{--                            @method("patch")--}}
{{--                            <div>--}}

{{--                                <div name="kids_detail">--}}
{{--                                    <li>--}}
{{--                                        <ul class="column">--}}
{{--                                            <li>--}}
{{--                                                <input name="kid_id" type="number" hidden value="{{$kid->id}}"/>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <ul class="column">--}}
{{--                                            <li>--}}
{{--                                                <label for="name">Date of birth</label>--}}
{{--                                                <input type="date" required name="age" id=""/>--}}
{{--                                                <div style="display: flex">--}}
{{--                                                    <strong style="font-weight: 800">Age</strong> &nbsp;--}}
{{--                                                    <input style="font-weight: 800" disabled type="text" id=""--}}
{{--                                                           value="{{$kid->age}}"/>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <ul class="column">--}}
{{--                                            <li>--}}
{{--                                                <label for="name">Gender</label>--}}
{{--                                                <select name="gender" id="">--}}
{{--                                                    <option disabled>--Gender--</option>--}}
{{--                                                    @if($kid->gender == 1)--}}
{{--                                                        <option value="0">Male</option>--}}
{{--                                                        <option selected value="1">Female</option>--}}
{{--                                                    @else--}}
{{--                                                        <option selected value="0">Male</option>--}}
{{--                                                        <option value="1">Female</option>--}}
{{--                                                    @endif--}}
{{--                                                </select>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <ul class="column">--}}
{{--                                            <li>--}}
{{--                                                <label for="name">Height</label>--}}
{{--                                                <input type="text" name="height" id="height"--}}
{{--                                                       value="{{ $kid->height }}"/>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <ul class="column">--}}
{{--                                            <li>--}}
{{--                                                <label for="name">Weight</label>--}}
{{--                                                <input type="text" name="weight" id="weight"--}}
{{--                                                       value="{{ $kid->weight }}"/>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <ul class="column">--}}
{{--                                            <li>--}}
{{--                                                <label for="name">Note</label>--}}
{{--                                                <input type="text" name="take_note" id="take_note"--}}
{{--                                                       value="{{ $kid->take_note }}"/>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}

{{--                                    <br/>--}}
{{--                                    <br/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <button type="submit">--}}
{{--                                <i class="fa fa-check-circle" style="padding-right: 5px;"></i>Update--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

@extends('layouts.layout')

@section('title')
    Kids' Information
@endsection

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
    <link rel="stylesheet" href="{{asset('css/uploadImage.css')}}">
@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript">
    </script>
    <script>
        var loadFile = function (event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@stop

@section('content')
    @php($id = Auth::user()->id)
    <div style="position:relative" id="blur" class="flex flex-col md:flex-row">
        <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

            <div class="bg-gray-800 pt-3 mb-25">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-bold pl-2">Account</h1>
                </div>
            </div>

            <div class="account-wrapper">
                <div class="mt-25" style="margin: 25px">
                    <form action="{{ route('account.update', ['id' => $id]) }}" method="post" class="w-full max-w-lg "
                          enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div style="display: flex; margin-bottom: 20px; margin-left: 100px;">
                            <div class="row row-images">
                                <label for="image" style="margin-left: 17px;">Images</label>
                                <div class="column image_container">
                                    <div class="post-image-collection">
                                        <label class="post-image post-image-placeholder mrm mts empty">
                                            <input type="file" id="avatar" name="avatar"
                                                   onchange="loadFile(event)"/>
                                            <span class="icon-camera"><img alt=""
                                                                           src="https://cdn.onlinewebfonts.com/svg/img_134042.png"></span>
                                            <p class="uppercase">Photo</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <img
                                style="margin-left: -40px; margin-top: 32px; width: 170px; height: 170px; border-radius: 50%"
                                id="output"/>
                        </div>
                        {{--                        <img alt="avatar" src="{{ asset('storage/avatar/' . $user_data->avatar) }}"/>--}}
                        <div class="flex flex-wrap -mx-3 mb-6 ">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 ">

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-first-name">
                                    Username
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="grid-first-name" name="fullname" type="text" value="{{ $user_data->fullname }}">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-last-name">
                                    Phone
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-last-name" type="text" name="phone" value="{{ $user_data->phone }}">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-zip">
                                    Address
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-zip" type="text" name="address" value="{{ $user_data->address }}">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Password
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-password" name="password" type="password"
                                    placeholder="******************">
                            </div>
                        </div>
                        <div style="margin-top: 14px;">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-city">
                                Link
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-city" name="link" type="text" value="{{$user_data->link}}">
                        </div>
                        <div style="display: flex">
                            <div class="w-full">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-10"
                                    type="submit">
                                    Update Account
                                </button>
                            </div>
                            <div style="width: 1013px; margin-right: -140px; margin-top: 47px;"><strong
                                    style="font-size: 18px;">Updated at: {{$user_data->updated_at}}</strong></div>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <a href="#" class="appear" style="margin-left: 25px;">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-10">
                        New Kid
                    </button>
                </a>

            </div>
            <div class="popup" style="display: none">
                <div class="popup-container">
                    <h1>Add New Kid</h1>
                    <button style="
                            position: relative;
                            margin-left: 771px;
                            margin-top: -30px;
                            font-size: 25px;
                    " type="button" class="close" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <form action="{{ route('kidStore', ['id' => $id]) }}" method="POST" class="form-style-9">
                        @csrf

                        <div class="form-group">
                            <div class="baby_details" name="kids">
                                <div class="list-item">
                                    <div class="column">
                                        <div class="form-group">
                                            <label for="namep">Date of Birth</label>
                                            <input type="date" name="agep" id="" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="column">
                                        <div class="form-group">
                                            <label for="genderp">Gender</label>
                                            <select name="genderp" id="" class="form-control">
                                                <option selected disabled>--Gender--</option>
                                                <option value="0">Male</option>
                                                <option value="1">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="column">
                                        <div class="form-group">
                                            <label for="heightp">Height</label>
                                            <input type="number" name="heightp" id="" class="form-control"
                                                   placeholder="Height"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="column">
                                        <div class="form-group">
                                            <label for="weightp">Weight</label>
                                            <input type="number" name="weightp" id="" class="form-control"
                                                   placeholder="Weight"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="column">
                                        <div class="form-group">
                                            <label for="notep" class="col-form-label">Note</label>
                                            <textarea name="notep" id="" rows="4" class="form-control"
                                                      placeholder="Note"
                                                      style="margin: 5px;
                                                      resize: none">

                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check-circle" style="padding-right: 5px;"></i>Save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="kids_detail">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <strong><i class="fa fa-plus"></i> Kids</strong>
                </div>
                @foreach($kids as $index => $kid)
                    <form action="{{ route('updateKid', ['id' => $id]) }}" method="post" id="kids_form" style="border: 1px solid pink; padding: 20px; margin-bottom: 20px;" enctype="multipart/form-data">
                        @csrf
                        @method("patch")

                        <input name="kid_id" type="number" hidden value="{{$kid->id}}"/>

                        <div class="form-group">
                            <div class="kid-order">
                                <span>Kid Order:</span>
                                <span class="order-number">{{ $index+1 }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">Date of Birth</label>
                            <input type="date" required name="age" class="form-control" id=""/>
                        </div>

                        <div class="form-group">
                            <label for="name">Age</label>
                            <input disabled type="text" name="age" class="form-control" value="{{$kid->age}}"/>
                        </div>

                        <div class="form-group">
                            <label for="name">Gender</label>
                            <select name="gender" class="form-control">
                                <option disabled selected>-- Gender --</option>
                                @if($kid->gender == 1)
                                    <option value="0">Male</option>
                                    <option value="1" selected>Female</option>
                                @else
                                    <option value="0" selected>Male</option>
                                    <option value="1">Female</option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Height</label>
                            <input type="text" name="height" class="form-control" value="{{ $kid->height }}"/>
                        </div>

                        <div class="form-group">
                            <label for="name">Weight</label>
                            <input type="text" name="weight" class="form-control" value="{{ $kid->weight }}"/>
                        </div>

                        <div class="form-group">
                            <label for="name">Note</label>
                            <input type="text" name="take_note" class="form-control" value="{{ $kid->take_note }}"/>
                        </div>

                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-check-circle" style="padding-right: 5px;"></i> Update
                        </button>
                    </form>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector(".appear").addEventListener("click", function () {
                document.querySelector(".popup").style.display = "flex";
            });

            document.querySelector(".close").addEventListener("click", function () {
                document.querySelector(".popup").style.display = "none";
            });
        });
    </script>
@endsection

