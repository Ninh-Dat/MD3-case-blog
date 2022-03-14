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
        <label for="formGroupExampleInput2">Role_id</label>
        <select  class="form-control" name="role_id">
            @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-info">Update</button>
        <a href="{{route('users.index')}}" class="btn btn-warning">< Back</a>
    </div>
</form>

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


