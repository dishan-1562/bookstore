<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>book list</h1>
        <table width="50%" border="1">
            <tr>
            <th>id</th>
            <th>title</th>
            <th>author</th>
            <th>price</th>
            <th>action</th>

            </tr>
            @foreach ($books as $book )
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->price}}</td>
                <td><a href="">View </a></td>

            </tr>

            @endforeach
        </table>
</body>
</html>
