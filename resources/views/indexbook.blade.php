
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
</head>
<body>
    <h1>Books List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Author</th>
                <th>Published Date</th>
            </tr>
        </thead>
        <tbody>
@foreach($books as $book)
    <tr>
        <td>{{ $book->name }}</td>
        <td>{{ $book->price }}</td>
        <td>{{ $book->quantity }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->published_date }}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </body>
    </html>
