<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'applicant_id',
        'status',
        'attachment',
        'supporting_document',
        'approval_letter',
        'assigned_reviewer_id',
        'edited_attachment',
        'category',
        'title',
        'description',
        'review_status',
    ];

    //Relationship to user (applicant)
    public function user()
    {
        return $this->belongsTo(User::class, 'applicant_id');
    }

    //Relationship to user (reviewer)
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'assigned_reviewer_id');
    }

    public function comment()
    {
        return $this->hasOne(Comment::class, 'application_id');
    }

    public function scopeFilter($query, array $filters)
    {
        if ($filters['status'] ?? false) {
            $query->where('status', 'like', '%' . request('status') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('status', 'like', '%' . request('search') . '%');
        }
    }
}
