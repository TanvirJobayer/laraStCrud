<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library Record Details</title>
</head>
<body>
    <h1>Library Record Details</h1>
    <hr>
    <br>
    <table border="1" cellspacing="0" cellpadding=10>
        <thead>
            <tr>
                <th colspan="2" align="center">Library Record for: &nbsp; {{$libraryRecord->student_name}}</th>
                <th align="center"> Actions </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{$libraryRecord->id}}</td>
                <td rowspan="8" align='center' valign="middle">
                    <button type="submit" onclick="window.location.href='/library_records/{{$libraryRecord->id}}/edit'"> Edit </button>
                    <br><br>
                    <form action="/library_records/{{$libraryRecord->id}}" method="post"></form>
                    @csrf
                    @method('delete')
                    <button type="submit">
                        Delete
                    </button>
                </td>
            </tr>
            <tr>
                <td>Student Name</td>
                <td>{{$libraryRecord->student_name}}</td>
            </tr>
            <tr>
                <td>Student ID</td>
                <td>{{$libraryRecord->student_id}}</td>
            </tr>
            <tr>
                <td>Book Title</td>
                <td>{{$libraryRecord->book_title}}</td>
            </tr>
            <tr>
                <td>Author</td>
                <td>{{$libraryRecord->author}}</td>
            </tr>
            <tr>
                <td>Issue Date</td>
                <td>{{$libraryRecord->issue_date}}</td>
            </tr>
            <tr>
                <td>Return Date</td>
                <td>{{$libraryRecord->return_date}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{$libraryRecord->status}}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <p><strong>Click the Button below to Go Back to Main Menu <h2>&darr; &darr; ↓ </h2></strong></p>
    <button type="submit" onclick="window.location.href='/library_records'" style="background-color: bisque ; color:blueviolet;"> Back to Library Record Lists</button>
</body>
</html>
