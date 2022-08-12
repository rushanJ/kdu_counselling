<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session_Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'counseller_id',
        'problem_type',
        'service_method',
        'remarks',
    ];
}

