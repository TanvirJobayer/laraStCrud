<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adda a Library Record</title>
</head>
<body>
    <h1>Adda a Library Record</h1>
    <hr>
    <br><br>
    <form action="/library_records" method="POST">
        @csrf
        <label>Student Name: </label>
        <input type="text" name="student_name" id="">
        <br><br>
        <label>Student ID: </label>
        <input type="text" name="student_id" id="">
        <br><br>
        <label>Book Title: </label>
        <input type="text" name="book_title" id="">
        <br><br>
        <label>Author: </label>
        <input type="text" name="author" id="">
        <br><br>
        <label>Issue Date: </label>
        <input type="date" name="issue_date" id="">
        <br><br>
        <label>Return Date: </label>
        <input type="date" name="return_date" id="">
        <br><br>
        <label>Status: </label>
        <input type="text" name="status" id="">
        <br><br><br>
        <button type="submit"> Save Library Record </button>
    </form>
</body>
</html>
