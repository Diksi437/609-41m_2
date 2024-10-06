<!doctype html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>609-41m</title>
</head>
<body>
<h2>Список мест:</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Ряд</td>
    <td>Место</td>
    <td>Ценовая категория</td>
    <td>Имя зала</td>
    </thead>
    @foreach($seats as $seat)
        <tr>
            <td>{{$seat->id}}</td>
            <td>{{$seat->row_num}}</td>
            <td>{{$seat->seat_number}}</td>
            <td>{{$seat->price_category}}</td>
            <td>{{$seat->hall->name}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
