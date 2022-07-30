@extends('layouts.loggedout')
@section('content')
    <h1>Login</h1>
    <hr>
    <form action="" method="POST">
        {{ csrf_field() }}
        Email: <input type="text" name="email" value="{{ old('email') }}"><br>
        @error('email')
            {{ $message }} <br>
        @enderror
        Password: <input type="password" name="password"><br>
        @error('password')
            {{ $message }} <br>
        @enderror
        <input type="submit" value="Login">
    </form>
@endsection