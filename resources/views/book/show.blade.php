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
            <th>{{$book->id}}</th>
            </tr>
            <tr>
                <th>title</th>
                <th>{{$book->title}}</th>
            </tr>
            <tr>
                <th>author</th>
                <th>{{$book->author}}</th>
            </tr>
            <tr>
                <th>price</th>
                <th>{{$book->price}}</th>
            </tr>
            <tr>
                <th>stock</th>
                <th>{{$book->stock}}</th>

        </table>
</body>
</html>
