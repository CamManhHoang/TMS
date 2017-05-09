<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class)->withTimestamps()->withPivot('teacher_approve', 'student_approve');
    }

    public function topic()
    {
        return $this->hasOne(Topic::class);
    }

    public function council()
    {
        return $this->belongsTo(Council::class);
    }
}
