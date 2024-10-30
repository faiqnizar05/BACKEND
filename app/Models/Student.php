<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $table = "students";

    protected $fillable = ['id','name', 'nim', 'email', 'jurusan', 'created_at','updated_at'];
}



