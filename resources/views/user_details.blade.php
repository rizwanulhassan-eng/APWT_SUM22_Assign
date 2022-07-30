@extends('layouts.loggedin')
@section('content')
    <h1>User Details</h1>
    <hr>
    <br>
    User Id: {{ $user->id }}
    <br>
    User Name: {{ $user->name }}
    <br>
    User Email: {{ $user->email }}
    <br>
    User Type: {{ $user->type }}
    <br>
    User Password: {{ $user->password }}
    <br>
    User Created At: {{ $user->created_at }}
    <br>
    User Updated At: {{ $user->updated_at }}
    <br>
@endsection