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
<h3>Thông tin chính</h3>

<div class="row">
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center">{{$user->name}}</h4>
                <p class="card-text"><b> Email: </b>{{$user->email}}</p>
                <p class="card-text"><b> Role: </b>{{$user->role->name}}</p>
                <a href="{{route('users.index')}}" class="btn btn-warning">< Back</a>
            </div>
        </div>
    </div>


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
{{--<table border="1px">--}}
{{--    <thead>--}}
{{--        <tr>--}}
{{--            <th>Id</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>Email</th>--}}
{{--            <th>Phone</th>--}}
{{--        </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--        <tr>--}}
{{--         <td>{{$user->id}}</td>--}}
{{--        </tr>--}}
{{--    </tbody>--}}

{{--</table>--}}
{{--<a href="{{route('users.index')}}"> < Back </a>--}}
{{--</body>--}}
{{--</html>--}}
