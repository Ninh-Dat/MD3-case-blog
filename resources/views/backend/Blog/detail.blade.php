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
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Category_id</th>
                <th scope="col">User_id</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->name}}</td>
                <td>{{$blog->title}}</td>
                <td>{{$blog->content}}</td>
                <td>{{$blog->category->name}}</td>
                <td>{{$blog->user->name}}</td>
            </tr>
        </table>
        <a href="{{route('blogs.index')}}" class="btn btn-warning">< Back</a>
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
{{--            <th>Title</th>--}}
{{--            <th>Content</th>--}}
{{--            <th>Category_id</th>--}}
{{--        </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--        <tr>--}}
{{--            <td>{{$blog->id}}</td>--}}
{{--            <td>{{$blog->name}}</td>--}}
{{--            <td>{{$blog->title}}</td>--}}
{{--            <td>{{$blog->content}}</td>--}}
{{--            <td>{{$blog->category_id}}</td>--}}
{{--        </tr>--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--<a href="{{route('blogs.index')}}">< Back</a>--}}
{{--</body>--}}
{{--</html>--}}
