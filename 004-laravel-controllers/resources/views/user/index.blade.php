<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User list</title>
</head>

<body>
    <h1>User list: </h1>
    @if ($users->isEmpty())
        <p>List empty.</p>
    @else
    <ul>
        
        @foreach ($users as $user)
        <li>{{ $user->name }} -- {{$user->age}} years old </li>
        @endforeach
    </ul>
    @endif
</body>

</html>
