<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Library Record</title>
</head>
<body>
    <h1>Edit Library Record</h1>
    <hr>
    <br><br>
    <form action="/library_records/{{$libraryRecord->id}}" method="POST">
        @csrf
        @method('put')
        <label>Student Name: </label>
        <input type="text" name="student_name" value="{{$libraryRecord->student_name}}">
        <br><br>
        <label>Student ID: </label>
        <input type="text" name="student_id" value="{{$libraryRecord->student_id}}">
        <br><br>
        <label>Book Title: </label>
        <input type="text" name="book_title" value="{{$libraryRecord->book_title}}">
        <br><br>
        <label>Author: </label>
        <input type="text" name="author" value="{{$libraryRecord->author}}">
        <br><br>
        <label>Issue Date: </label>
        <input type="date" name="issue_date" value="{{$libraryRecord->issue_date}}">
        <br><br>
        <label>Return Date: </label>
        <input type="date" name="return_date" value="{{$libraryRecord->return_date}}">
        <br><br>
        <label>Status: </label>
        <input type="text" name="status" value="{{$libraryRecord->status}}">
        <br><br><br>
        <button type="submit"> Save Library Record </button>
    </form>
</body>
</html>
