<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <hr>
    <br>
    <br>
    <table border="1" cellspacing="0" cellpadding='8'>
        <thead>
            <tr>
                <th colspan='2' align="center">Name: {{$student->name}}</th>
                <th align='center'>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><Strong>ID</Strong></td>
                <td>{{$student->id}}</td>
                <td rowspan="6" valign="middle">
                    <button onclick="window.location.href='/students/{{$student->id}}/edit'"> Edit </button>
                    <br>
                    <br>
                    <form action="/students/{{$student->id}}" method="post" style="display: inline;">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('Are you Sure ?')">
                        Delete
                    </button>
                    </form>
                </td>
            </tr>
            <tr>
                <td><strong>Name</strong></td>
                <td>{{$student->name}}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>{{$student->email}}</td>
            </tr>
            <tr>
                <td><strong>Phone</strong></td>
                <td>{{$student->phone}}</td>
            </tr>
            <tr>
                <td><strong>Department</strong></td>
                <td>{{$student->department}}</td>
            </tr>
            <tr>
                <td><strong>Age</strong></td>
                <td>{{$student->age}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <a href="/students"> Back to Student Lists</a>
</body>
</html>
