<?php

namespace App\Http\Controllers;

use App\Models\LibraryRecord;
use Illuminate\Http\Request;

class LibraryRecordController extends Controller
{
    public function index()
    {
        $libraryRecords = LibraryRecord::all();
        return view('libraryRecords.index', compact('libraryRecords'));
    }
}
