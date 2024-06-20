<!DOCTYPE html>
<html>
<head>
    <title>Browse Movies</title>
</head>
<body>
<h2>Movies</h2>

@forelse ($ducks as $duck)
    <p>
        Title: {{ $duck->title }}<br>
        Year: {{ $duck->year }}<br>
        Runtime: {{ $duck->runtime }}<br>
        Runtime: {{ $duck->vote }}<br>
        Plot: {{ $duck->plot }}<br>
    </p>
@empty
    <p>No results</p>
@endforelse

</body>
</html>
