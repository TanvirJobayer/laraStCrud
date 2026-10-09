<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library Records list</title>
</head>
<body>
    <h1>Library Records list</h1>
    <hr>
    <br><br>
    <table border="1" cellspacing='0' cellpadding='10'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Student ID</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Issue Date</th>
                <th>Return Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($libraryRecords as $libraryRecord)
            <tr>
                <td>{{$libraryRecord->id}}</td>
                <td>{{$libraryRecord->student_name}}</td>
                <td>{{$libraryRecord->student_id}}</td>
                <td>{{$libraryRecord->book_title}}</td>
                <td>{{$libraryRecord->author}}</td>
                <td>{{$libraryRecord->issue_date}}</td>
                <td>{{$libraryRecord->return_date}}</td>
                <td>{{$libraryRecord->status}}</td>
                <td>

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9" align="center"> No Data Found </td>
            </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
