<!doctype html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>609-41m</title>
</head>
<body>
<h2>{{$hall ? "Места в зале ".$hall->name : 'Неверный ID зала'}}</h2>
@if($hall)
    <table border="1">
        <thead>
        <td>id</td>
        <td>Ряд</td>
        <td>Место</td>
        <td>Ценовая категория</td>
        </thead>
        @foreach($hall->seats as $seat)
            <tr>
                <td>{{$seat->id}}</td>
                <td>{{$seat->row_num}}</td>
                <td>{{$seat->seat_number}}</td>
                <td>{{$seat->price_category}}</td>
            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
