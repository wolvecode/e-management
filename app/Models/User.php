<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'profileLink',
        'onboarding_id',
        'institution',
        'faculty',
        'contact',
        'specialization',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //Relationship with application (Getting all application of an applicant )
    public function application()
    {
        return $this->hasMany(Application::class, 'applicant_id');
    }


    //Relationship with reviewer application (Getting all application attached for reviewer)
    public function reviewer_application()
    {
        return $this->hasMany(Application::class, 'assigned_reviewer_id');
    }

    //All applicants 
    public function applicants()
    {
        return $this->hasMany(Reviewer::class, 'reviewer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }

    public function comment()
    {
        return $this->hasOne(Comment::class, 'reviewer_id');
    }

    public function assignedApplications()
    {
        return $this->belongsToMany(Application::class, 'reviewers', 'reviewer_id', 'application_id');
    }
}
