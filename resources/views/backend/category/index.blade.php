@extends('backend.master')
@section('header','List Category')
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
                    <th style="text-align:center " scope="col">Description</th>
                    <th style="text-align:center " scope="" colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $key=>$category)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td><a href="{{route('categories.show',$category->id)}}" type="button" class="btn btn-info">Detail</a></td>
                        <td><a onclick="return confirm('Bạn có muốn xóa bài viết không ')" href="{{route('categories.destroy', $category->id)}}" type="button" class="btn btn-danger">Delete</a></td>
                        <td><a href="{{route('categories.edit',$category->id)}}" type="button" class="btn btn-success">Update</a></td>
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
{{--<a href="{{route('categories.create')}}">Create Category</a>--}}
{{--    <table border="1px">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>STT</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>Description</th>--}}
{{--            <th colspan="3">Action</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--            @foreach($categories as $key=>$category)--}}
{{--                <tr>--}}
{{--                    <td>{{$key+1}}</td>--}}
{{--                    <td>{{$category->name}}</td>--}}
{{--                    <td>{{$category->description}}</td>--}}
{{--                    <td><a href="{{route('categories.show',$category->id)}}" type="button" class="btn btn-info">Detail</a></td>--}}
{{--                    <td><a onclick="return confirm('Bạn có muốn xóa bài viết không ')" href="{{route('categories.destroy', $category->id)}}" type="button" class="btn btn-danger">Delete</a></td>--}}
{{--                    <td><a href="{{route('categories.edit',$category->id)}}" type="button" class="btn btn-success">Update</a></td>--}}
{{--                </tr>--}}

{{--            @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</body>--}}
{{--</html>--}}
