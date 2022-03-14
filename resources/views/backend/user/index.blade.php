<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a href="{{route('users.create')}}" type="button" class="btn btn-success  ml-4 mt-3"> Create User</a>

<table class="table table-striped">
                <thead >
                <tr >
                    <th style="text-align:center " scope="col">STT</th>
                    <th style="text-align:center " scope="col">Name</th>
                    <th style="text-align:center " scope="col">Email</th>
                    <th style="text-align:center " scope="" colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key=>$user)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="{{route('users.show',$user->id)}}" type="button" class="btn btn-info">Detail</a></td>
                        <td><a onclick="return confirm('Bạn có muốn xóa bài viết không ')" href="{{route('users.destroy', $user->id)}}" type="button" class="btn btn-danger">Delete</a></td>
                        <td><a href="{{route('users.edit',$user->id)}}" type="button" class="btn btn-success">Update</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
            integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
            crossorigin="anonymous"></script>
</body>
</html>

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
