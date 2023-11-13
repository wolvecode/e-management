<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    use HasFactory;

    //Relationship to user (applicant)
    public function user()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'assigned_reviewer_id', 'reviewer_id');
    }
}
