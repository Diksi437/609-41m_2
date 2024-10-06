<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41m</title>
</head>
<body>
<h2>{{ $movie ? "Сеансы фильма: " . $movie->name : 'Неверный ID фильма' }}</h2>
@if($movie)
    <table border="1">
        <thead>
        <tr>
            <td>id</td>
            <td>Зал</td>
            <td>Время начала</td>
        </tr>
        </thead>
        @foreach($movie->screenings as $screening)
            <tr>
                <td>{{ $screening->id }}</td>
                <td>{{ $screening->hall->name }}</td>
                <td>{{ $screening->start_time }}</td>
            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
