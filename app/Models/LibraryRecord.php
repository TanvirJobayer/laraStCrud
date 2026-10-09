<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibraryRecord extends Model
{
    protected $fillable = [
        'student_name',
        'student_id',
        'book_title',
        'author',
        'issue_date',
        'return_date',
        'status',
    ];
}
