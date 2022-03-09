@extends('backend.master')
@section('header','Category Category')
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
<form action="{{route('categories.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control" name="name" id="formGroupExampleInput2">

    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Description</label>
        <input type="text" class="form-control" name="description" id="formGroupExampleInput2">
    </div>

    <div class="form-group mt-2">
        <button type="submit" class="btn btn-info">Create</button>
        <a href="{{route('users.index')}}" class="btn btn-warning">< Back</a>
    </div>
</form>

</body>
</html>
@endsection




