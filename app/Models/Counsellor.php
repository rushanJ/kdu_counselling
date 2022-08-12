<?php

namespace App\Models;

use App\Models\User;
use App\Models\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function student()
    {
        return $this->hasMany(Request::class);
    }
    public function counsellor()
    {
        return $this->hasMany(Request::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
}
