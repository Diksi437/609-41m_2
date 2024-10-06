<!doctype html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>609-41m</title>
</head>
<body>
<h2>Список залов:</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Название</td>
    </thead>
    @foreach($halls as $hall)
        <tr>
            <td>{{$hall->id}}</td>
            <td>{{$hall->name}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
