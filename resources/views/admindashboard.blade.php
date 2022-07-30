@extends('layouts.loggedin')
@section('content')
    <h1>Admin Dashboard</h1>
    <hr>
    <br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td><a href="{{route('user.details.view',['id'=>$user->id])}}">{{$user->name}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection