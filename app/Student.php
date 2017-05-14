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

    public function class_uet()
    {
        if ($this->class == 1) {
            echo ''?>
            CA
            <?php
        } else if ($this->class == 2) {
            echo ''?>
            CLC
            <?php
        } else if ($this->class == 3) {
            echo ''?>
            Chuẩn
            <?php
        }
    }
}
