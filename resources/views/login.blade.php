<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50">
        <h2>Login</h2>
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        @if (session('errorLogin'))
            <div class="alert alert-danger">{{session('errorLogin')}}</div>
        @endif
        <form action="{{route('postLogin')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Login</button>
                <a href="{{route('register')}}" class="btn btn-info">Register</a>
            </div>
        </form>
    </div>

</body>
</html>
