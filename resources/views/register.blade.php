@extends('layouts.loggedout')
@section('content')
    <h1>Register</h1>
    <hr>
    <form action="" method="POST">
        {{ csrf_field() }}
        Name: <input type="text" name="name" value="{{ old('name') }}"><br>
        @error('name')
            {{ $message }} <br>
        @enderror
        Email: <input type="text" name="email" value="{{ old('email') }}"><br>
        @error('email')
            {{ $message }} <br>
        @enderror
        Password: <input type="password" name="password"><br>
        @error('password')
            {{ $message }} <br>
        @enderror
        Confirm Password: <input type="password" name="password_confirmation"><br>
        @error('password_confirmation')
            {{ $message }} <br>
        @enderror
        <input type="submit" value="Register">
    </form>

@endsection