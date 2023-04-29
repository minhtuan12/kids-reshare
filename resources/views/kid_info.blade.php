{{-- @extends('layouts.layout')

@section('title')
    Kids' Information
@endsection

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
    {{-- user's data --}}
{{-- <b>My Account</b> <br>
    User Info <br><br>
    <div>
        <label for="">
            <span>Full Name</span>
            <span>{{ $user_data->fullname }}</span>
        </label> <br>
        <label for="">
            <span>Phone</span>
            <span>{{ $user_data->phone }}</span>
        </label> <br>
        <label for="">
            <span>Address</span>
            <span>{{ $user_data->address }}</span>
        </label> <br>
        <label for="">
            <span>Created At</span>
            <span>{{ $user_data->created_at }}</span>
        </label> <br>
        @php($id = Auth::user()->id)
        <button> <a href="{{ route('account.update', ['id' => $id]) }}">Change</a></button>
    </div> <br> <br>


    {{-- Kids' info --}}
{{-- Kid Info <br><br>
    <form action="{{ route('account.store', ['id' => $id]) }}" method="POST">
        @csrf

        <label>
            <span>Number of child</span>
            <select name="child_num">
                <option type="radio" value="1">1</option>
                <option type="radio" value="2">2
                <option type="radio" value="3">3
                <option type="radio" value="4">4
            </select>
        </label>
        <label>
            <span>Date of birth</span>
            <input required type="date" name="age" class="">
        </label>
        <label>
            <span>Gender</span>
            <input type="radio" id="male" name="gender" value="1">
            <label for="">Male</label>
            <input type="radio" id="female" name="gender" value="0">
            <label for="">Female</label><br>
        </label>
        <label for="">
            <span>Height</span>
            <input required type="number" name="height" placeholder="Height">
            <span>Weight</span>
            <input required type="number" name="weight" placeholder="Weight">
        </label>
        <label>Note</label>
        <textarea name="note" placeholder="Note"></textarea>
        <input type="submit" value="Save">
    </form> --}}

{{-- @endsection --}}








@extends('layouts.layout')

@section('title')
    Kids' Information
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styleProducts.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
@stop

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript">
        var baby_count = 0;
        $(document).ready(function() {
            $(".add-row").click(function() {
                var $clone = $("div.baby_details").first().clone();
                $clone.append("<button type='button' class='remove-row'>-</button>");
                $clone.insertBefore(".add-row");
                baby_count ++;
            });

            $(".form-style-9").on("click", ".remove-row", function() {
                $(this).parent().remove();
            });
        });
    </script>
@stop

@section('content')
    @php($id = Auth::user()->id)
    <div class="flex flex-col md:flex-row">
        <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

            <div class="bg-gray-800 pt-3 mb-25">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-bold pl-2">Account</h1>
                </div>
            </div>

            <div class="mt-25" style="margin: 25px">
                <form class="w-full max-w-lg ">
                    <div class="flex flex-wrap -mx-3 mb-6 ">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name">
                                Full Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" disabled type="text" placeholder="{{ $user_data->fullname }}">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Phone
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" disabled type="text" placeholder="{{ $user_data->phone }}">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Password
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password" disabled type="password" placeholder="******************">
                            {{-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> <br> --}}
                        </div>
                        {{-- <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Confirm Password
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password" disabled type="password" placeholder="******************">
                        </div> --}}
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-city">
                                Address
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-city" disabled type="text" placeholder="Albuquerque">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-state">
                                Your kids
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="my_select" name="kid_number"
                                    onchange="myFunction(this.options[this.selectedIndex].value)">
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                    <option value=4>4</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0 flex">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                style="margin:10px 5px 5px 10px  ">
                                <a href="{{ route('account.createUpdate', ['id' => $id]) }}"> Change </a>
                            </button>
                            {{-- <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                style="margin:10px 5px 5px 10px  ">
                                Accept
                            </button> --}}
                        </div>
                    </div>
                </form>
            </div>


            {{-- kids data --}}

            <form action="{{ route('account.store', ['id' => $id]) }}" method="POST" class="form-style-9">
                @csrf

                <div class="baby_details" name="kids[]">
                    {{-- <form id="baby_1" style="display:block"> --}}
                    <li>
                        <ul class="column">
                            <li>
                                <label for="name">Date of birth</label>
                                <input type="date" name="age[]" id="" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column">
                            <li>
{{--                                <label for="name">Gender</label>--}}
                                <select name="gender[]" id="" >
                                    <option disabled>--Gender--</option>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column">
                            <li>
                                <label for="buy_date">Height</label>
                                <input type="number" name="height[]" id="" placeholder="Height" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column">
                            <li>
                                <label for="material">Weight</label>
                                <input type="number" name="weight[]" id="" placeholder="Weight" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column">
                            <li>
                                <label for="note" class="col-form-label">Note</label>
                                <textarea name="take_note[]" id="" rows="4" class="form-control" placeholder=" Note" style="margin: 5px;"></textarea>
                            </li>
                        </ul>
                    </li>
                </div>

                <button type="button" class="add-row">+</button>
                {{-- </form> --}}
                <button type="submit">
                    <i class="fa fa-check-circle" style="padding-right: 5px;"></i>Save
                </button>
            </form>
        </div>
    </div>
@endsection

{{-- <script>
    console.log(1);
    const el = document.getElementById("my_select");
    console.log(el);

    function myFunction(value) {
        if (value == 1) {
            document.getElementById("baby_1").style.display = "block";
            document.getElementById("baby_2").style.display = "none";
            document.getElementById("baby_3").style.display = "none";
            document.getElementById("baby_4").style.display = "none";
        } else if (value == 2) {
            document.getElementById("baby_1").style.display = "block";
            document.getElementById("baby_2").style.display = "block";
            document.getElementById("baby_3").style.display = "none";
            document.getElementById("baby_4").style.display = "none";
        } else if (value == 3) {
            document.getElementById("baby_1").style.display = "block";
            document.getElementById("baby_2").style.display = "block";
            document.getElementById("baby_3").style.display = "block";
            document.getElementById("baby_4").style.display = "none";
        } else {
            document.getElementById("baby_1").style.display = "block";
            document.getElementById("baby_2").style.display = "block";
            document.getElementById("baby_3").style.display = "block";
            document.getElementById("baby_4").style.display = "block";
        }

    }
</script> --}}
{{--

</html>
--}}
