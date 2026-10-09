<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store()
    {
        $student = new Student();

        $student->name = request('name');
        $student->email = request('email');
        $student->phone = request('phone');
        $student->department = request('department');
        $student->age = request('age');

        $student->save();

        return redirect("/students/{$student->id}");
        // return redirect('/students/' . $student->id);

        // return redirect()->route('students.show', $student->id);
    }

    public function show($id)
    {
        $student = Student::findorFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findorFail($id);
        return view('students.edit', compact('student'));
    }

    public function update($id)
    {
        $student = Student::findorFail($id);

        $student->name = request('name');
        $student->email = request('email');
        $student->phone = request('phone');
        $student->department = request('department');
        $student->age = request('age');

        $student->save();

        return redirect("/students/{$student->id}");
    }

    public function destroy($id)
    {
        $student = Student::findorFail($id);
        $student->delete();

        return redirect('/students');
    }
}
