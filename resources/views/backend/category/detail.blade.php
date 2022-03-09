@extends('backend.master')
@section('header','Detail Category')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
            </tr>
        </table>
        <a href="{{route('categories.index')}}" class="btn btn-warning">< Back</a>
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
{{--            <th>Description</th>--}}
{{--        </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--        <tr>--}}
{{--            <td>{{$category->id}}</td>--}}
{{--            <td>{{$category->name}}</td>--}}
{{--            <td>{{$category->description}}</td>--}}
{{--        </tr>--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--<a href="{{route('categories.index')}}">< Back</a>--}}
{{--</body>--}}
{{--</html>--}}
