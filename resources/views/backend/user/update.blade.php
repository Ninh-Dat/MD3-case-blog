@extends('backend.master')
@section('header','Update User')
@section('content')
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
<form action="{{route('users.update', $user->id)}}" method="post">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$user->name}}">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Email</label>
        <input type="email" class="form-control" name="email" id="formGroupExampleInput2" value="{{$user->email}}">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Password</label>
        <input type="password" class="form-control" name="password" id="formGroupExampleInput2" value="{{$user->password}}">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Phone</label>
        <input type="number" class="form-control" name="phone" id="formGroupExampleInput2" value="{{$user->phone}}">
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-info">Update</button>
        <a href="{{route('users.index')}}" class="btn btn-warning">< Back</a>
    </div>
</form>

</body>
</html>
@endsection


