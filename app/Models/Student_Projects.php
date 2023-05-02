<?php

namespace App\Models;
use App\Http\Controllers\stuent_project;
use Illuminate\Database\Eloquent\Model;

class Student_Projects extends Model
{
   protected $table = 'student__projects';
   protected $fillable = [
    'stname',
    'email',
    'number',
    'date',
    'projec_name',
    'profile_image',
    'project_image',
   ];
}
