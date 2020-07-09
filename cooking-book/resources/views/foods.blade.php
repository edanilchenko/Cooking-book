<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Cooking book
    <form action="{{ route('ingridients') }}" method="post">
        @csrf
        @foreach ($foods as $food)
            <div><input type="checkbox" name="foods[{{ $food->id }}]">{{ $food->name }}</div>
        @endforeach
        <input type="submit" value="Get ingridients list">
    </form>
</body>
</html>