@extends('backend.master')
@section('header','Detail Blog')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Category_id</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->name}}</td>
                <td>{{$blog->title}}</td>
                <td>{{$blog->content}}</td>
                <td>{{$blog->category->name}}</td>
            </tr>
        </table>
        <a href="{{route('blogs.index')}}" class="btn btn-warning">< Back</a>
    </div>

@endsection


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Title</th>
            <th>Content</th>
            <th>Category_id</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$blog->id}}</td>
            <td>{{$blog->name}}</td>
            <td>{{$blog->title}}</td>
            <td>{{$blog->content}}</td>
            <td>{{$blog->category_id}}</td>
        </tr>
    </tbody>
</table>
<a href="{{route('blogs.index')}}">< Back</a>
</body>
</html>
