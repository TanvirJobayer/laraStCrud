<?php

namespace App\Http\Controllers;

use App\Models\LibraryRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LibraryRecordController extends Controller
{
    public function index()
    {
        $libraryRecords = LibraryRecord::all();
        return view('libraryRecords.index', compact('libraryRecords'));
    }

    public function create()
    {
        return view('libraryRecords.create');
    }

    public function store()
    {
        $libraryRecord = new LibraryRecord;
        $libraryRecord->student_name = request('student_name');
        $libraryRecord->student_id = request('student_id');
        $libraryRecord->book_title = request('book_title');
        $libraryRecord->author = request('author');
        $libraryRecord->issue_date = request('issue_date');
        $libraryRecord->return_date = request('return_date') ?: null;
        $libraryRecord->status = request('status') ?: 'Borrowed';
        $libraryRecord->save();

        return redirect("/library_records");
    }

    public function show($id)
    {
        $libraryRecord = LibraryRecord::findorFail($id);
        return view('libraryRecords.show', compact('libraryRecord'));
    }

    public function edit($id)
    {
        $libraryRecord = LibraryRecord::findorFail($id);
        return view('libraryRecords.edit', compact('libraryRecord'));
    }

    public function update($id)
    {
        $libraryRecord = LibraryRecord::findorFail($id);
        $libraryRecord->student_name = request('student_name');
        $libraryRecord->student_id = request('student_id');
        $libraryRecord->book_title = request('book_title');
        $libraryRecord->author = request('author');
        $libraryRecord->issue_date = request('issue_date');
        $libraryRecord->return_date = request('return_date') ?: null;
        $libraryRecord->status = request('status') ?: 'Borrowed';
        $libraryRecord->save();

        return redirect("/library_records");
    }

    public function destroy($id)
    {
        $libraryRecord = LibraryRecord::findorFail($id);
        $libraryRecord->delete();

        return Redirect('/library_records');
    }
}
