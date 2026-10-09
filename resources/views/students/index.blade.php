<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Lists</title>
</head>
<body>
    <h1>Student Lists</h1>
    <hr>
    <a href="/students/create"> Add Student </a>

    <br><br>

    <table border="1" cellspacing="0" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)

            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->department}}</td>
                <td>{{$student->age}}</td>
                <td>
                    <a href="/students/{{$student->id}}"> View </a>
                    |
                    <a href="/students/{{$student->id}}/edit"> Edit </a>
                    |
                    <form action="/students/{{$student->id}}" method="post" style="display: inline;">
                    @csrf
                    @method('delete')
                        <button type="submit">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="7" align="center"> No Data Found </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
