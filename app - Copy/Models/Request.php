<?php

namespace App\Models;

use App\Models\Counsellors;
use App\Models\Student_Request;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    public function hasStudent()
    {
        return $this->belongsTo(Counsellors::class);
    }
    public function hasCounsellor()
    {
        return $this->belongsTo(Counsellors::class);
    }
    public function answers()
    {
        return $this->belongsToMany(Student_Request::class, 'student__requests');
    }
}
