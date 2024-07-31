<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container w-50">
        <h2>Register</h2>
        <form action="{{ route('postRegister') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Fullname</label>
                <input type="text" name="fullname" id="" class="form-control"
                value="{{old('fullname')}}">
                @error('fullname')
                    <span class="">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Username</label>
                <input type="text" name="username" id="" class="form-control">
                @error('username')
                    <span class="">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control">
                @error('email')
                    <span class="">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control">
                @error('password')
                    <span class="">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Register</button>
                <a href="{{ route('login') }}" class="btn btn-info">Login</a>

            </div>
        </form>
    </div>

</body>

</html>
