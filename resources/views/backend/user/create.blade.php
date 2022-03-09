@extends('backend.master')
@section('header','Create User')
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
<form action="{{route('users.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="name"
               placeholder="Điền tên ">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Email</label>
        <input type="email" class="form-control" name="email" id="formGroupExampleInput2"
               placeholder="Điền email">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Password</label>
        <input type="password" class="form-control" name="password" id="formGroupExampleInput2"
               placeholder="Điền password">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Phone</label>
        <input type="number" class="form-control" name="phone" id="formGroupExampleInput2"
               placeholder="Điền số điện thoại">
    </div>
    <div class="form-group mt-2">
          <button type="submit" class="btn btn-info">Create</button>
          <a href="{{route('users.index')}}" class="btn btn-warning">< Back</a>
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
{{--<form action="{{route('users.store')}}" method="post">--}}
{{--    @csrf--}}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <td>Name</td>--}}
{{--            <td><input type="text" name="name"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Email</td>--}}
{{--            <td><input type="email" name="email"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Password</td>--}}
{{--            <td><input type="password" name="password"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Phone</td>--}}
{{--            <td><input type="number" name="phone"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td colspan="2">--}}
{{--                <input type="submit" value="Create">--}}
{{--                <a href="{{route('users.index')}}">< Back</a>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    </table>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}
