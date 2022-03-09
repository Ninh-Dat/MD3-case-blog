@extends('backend.master')
@section('header','Create Blog')
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
<form action="{{route('blogs.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control"  name="name"
               placeholder="Điền tên ">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Title</label>
        <input type="text" class="form-control" name="title" id="formGroupExampleInput2"
               placeholder="Điền title">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Content</label>
        <input type="text" class="form-control" name="content" id="formGroupExampleInput2"
               placeholder="Điền content">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Category_id</label>
        <select  class="form-control" name="select">
            <option>--Tùy chọn--</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-info">Create</button>
        <a href="{{route('blogs.index')}}" class="btn btn-warning">< Back</a>
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
{{--<form action="{{route('blogs.store')}}" method="post">--}}
{{--    @csrf--}}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <td>Name</td>--}}
{{--            <td><input type="text" name="name"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Title</td>--}}
{{--            <td><input type="text" name="title"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Content</td>--}}
{{--            <td><input type="text" name="content"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Category_id</td>--}}
{{--            <td>--}}
{{--                <select name="select" >--}}
{{--                    <option>--Tùy chọn--</option>--}}
{{--                    @foreach($categories as $category)--}}

{{--                        <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </td>--}}

{{--        </tr>--}}

{{--        <tr>--}}
{{--            <td colspan="2"><input type="submit" value="Create"> </td>--}}
{{--            <a href="{{route('blogs.index')}}">< Back</a>--}}
{{--        </tr>--}}
{{--    </table>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}