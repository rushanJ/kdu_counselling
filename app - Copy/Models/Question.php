<?php

namespace App\Models;
use App\Models\Student_Request;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;


    protected $fillable = [
     
        'question',
   
    ];

    public function student_answers()
    {
        return $this->belongsToMany(Student_Request::class, 'student__requests');
    }

}

