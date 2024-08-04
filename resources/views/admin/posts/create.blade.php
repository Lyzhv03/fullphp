<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container w-50">
        <h1>Create new post</h1>
        {{-- thong bao khi validate --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title"  value="{{old('title')}}">
                @error('title')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <!--Hình ảnh-->
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input class="form-control" id="fileImage" type="file" name="image">
                <img  id="img" src="" alt="" width="60px">
                @error('image')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3">{{old('description')}}</textarea>
                @error('description')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea class="form-control" name="content" rows="6">{{old('content')}}</textarea>
                @error('content')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">View</label>
                <input type="number" name="view" class="form-control" value="{{old('title')}}">
                @error('view')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="cate_id" class="form-select">
                    @foreach ($categories as $cate)
                        <option value="{{ $cate->id }}"
                            @selected($cate->id == old('cate_id'))
                            >
                            {{ $cate->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-b">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('post.index') }}" class="btn btn-primary">List post</a>
            </div>
        </form>
    </div>
    <script>
        var fileImage = document.querySelector('#fileImage')
        var img = document.querySelector('#img');

        fileImage.addEventListener('change',function(e){
            e.preventDefault()
            img.src = URL.createObjectURL(this.files[0])
        })
    </script>
</body>

</html>
