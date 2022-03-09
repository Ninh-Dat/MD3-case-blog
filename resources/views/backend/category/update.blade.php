@extends('backend.master')
@section('header','Update Category')
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
<form action="{{route('categories.update', $category->id)}}" method="post">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$category->name}}" >
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Description</label>
        <input type="text" class="form-control" name="description" id="formGroupExampleInput2" value="{{$category->description}}">
    </div>

    <div class="form-group mt-2">
        <button type="submit" class="btn btn-info">Update</button>
        <a href="{{route('categories.index')}}" class="btn btn-warning">< Back</a>
    </div>
</form>

</body>
</html>
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
{{--<form action="{{route('categories.update', $category->id)}}" method="post">--}}
{{--    @csrf--}}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <td>Name</td>--}}
{{--            <td><input type="text" name="name" value="{{$category->name}}"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Description</td>--}}
{{--            <td><input type="text" name="description" value="{{$category->description}}"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td colspan="2">--}}
{{--                <input type="submit" value="Update">--}}
{{--                <a href="{{route('categories.index')}}">< Back</a>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    </table>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}

