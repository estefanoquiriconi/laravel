<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>

<body>
    <a href="{{ route('index') }}">Back to index</a>
    <br>
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name "> <br>
        <input type="file" name="file" placeholder="File "> <br>
        <input type="submit" value="send">
    </form>
</body>

</html>
