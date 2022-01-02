<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($blogs as $blog)
        <div class="row"> 
            <div>
                <h3>Blog Title</h3>
                <p>{{ $blog->title}}</p>
                {{ $blog->body }}
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>