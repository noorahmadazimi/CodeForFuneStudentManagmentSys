<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_code',
        'course_name',
        'credit',
        'description',
        'department_id',
        'semester_id',
    ];
}
