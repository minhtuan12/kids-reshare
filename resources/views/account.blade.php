@extends('layouts.layout')

@section('styles')
@stop

@section('scripts')
@stop

@section('title')
    {{ Auth::user()->fullname }}'s Profile
@stop

@section('content')
    @php($id = Auth::user()->id)
    <form action="{{ route('account.update', ['id' => $id]) }}" method="POST">
        @csrf
        @method('patch')

        <label>
            <span>Full Name</span>
            <input autofocus required type="text" name="fullname" class="" value="{{ $user_data->fullname }}">
        </label>
        <label>
            <span>Number</span>
            <input required type="text" name="phone" class="number" value="{{ $user_data->phone }}">
        </label>
        <label>
            <span>Password</span>
            <input required type="password" name="password" class="password">
        </label>
        <label>
            <span>Confirm Password</span>
            <input required type="password" name="cfPassword" class="password">
        </label>
        <input type="submit" value="Save">
        <br>
        <p>Last modified: {{ Auth::user()->updated_at }}</p>
    </form>
@endsection
