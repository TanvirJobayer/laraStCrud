<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
</head>

<body>
    <h1>Add Student</h1>

    <form action="/students" method="post">
        @csrf
        @method('post')
        <label for="name">Name</label>
        <input type="text" name="name" id="">
        <br>
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="">
        <br>
        <br>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="">
        <br>
        <br>
        <label for="department">Department</label>
        <input type="text" name="department" id="">
        <br>
        <br>
        <label for="age">Age</label>
        <input type="text" name="age" id="">
        <br>
        <br>
        <button type="submit">Save Student</button>
    </form>
</body>

</html>
