@extends('backend.master')
@section('header','List User')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead >
                <tr >
                    <th style="text-align:center " scope="col">STT</th>
                    <th style="text-align:center " scope="col">Name</th>
                    <th style="text-align:center " scope="col">Email</th>
                    <th style="text-align:center " scope="col">Phone</th>
                    <th style="text-align:center " scope="" colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key=>$user)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td><a href="{{route('users.show',$user->id)}}" type="button" class="btn btn-info">Detail</a></td>
                        <td><a onclick="return confirm('Bạn có muốn xóa bài viết không ')" href="{{route('users.destroy', $user->id)}}" type="button" class="btn btn-danger">Delete</a></td>
                        <td><a href="{{route('users.edit',$user->id)}}" type="button" class="btn btn-success">Update</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
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
{{--<a href="{{route('users.create')}}">Create</a>--}}
{{--    <table border="1px">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>STT</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>Email</th>--}}
{{--            <th>Phone</th>--}}
{{--            <th colspan="3">Action</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--            @foreach($users as $key=>$user)--}}
{{--                <tr>--}}
{{--                    <td>{{$key+1}}</td>--}}
{{--                    <td>{{$user->name}}</td>--}}
{{--                    <td>{{$user->email}}</td>--}}
{{--                    <td>{{$user->phone}}</td>--}}
{{--                    <td><a href="{{route('users.show',$user->id)}}" type="button" class="btn btn-info">Detail</a></td>--}}
{{--                    <td><a onclick="return confirm('Bạn có muốn xóa bài viết không ')" href="{{route('users.destroy', $user->id)}}" type="button" class="btn btn-danger">Delete</a></td>--}}
{{--                    <td><a href="{{route('users.edit',$user->id)}}" type="button" class="btn btn-success">Update</a></td>--}}
{{--                </tr>--}}

{{--            @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</body>--}}
{{--</html>--}}
