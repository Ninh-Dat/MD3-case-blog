@extends('backend.master')
@section('header','Detail User')
@section('content')
<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{$user->name}}</h4>
                <p class="card-text">{{$user->email}}</p>
                <p class="card-text">{{$user->phone}}</p>
                <a href="{{route('users.index')}}" class="btn btn-warning">< Back</a>
            </div>
        </div>
    </div>
@endsection
{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<table border="1px">--}}
{{--    <thead>--}}
{{--        <tr>--}}
{{--            <th>Id</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>Email</th>--}}
{{--            <th>Phone</th>--}}
{{--        </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--        <tr>--}}
{{--         <td>{{$user->id}}</td>--}}
{{--        </tr>--}}
{{--    </tbody>--}}

{{--</table>--}}
{{--<a href="{{route('users.index')}}"> < Back </a>--}}
{{--</body>--}}
{{--</html>--}}
