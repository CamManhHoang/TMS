<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Topic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function status()
    {
        if ($this->student == null) {
            echo ''?>
            <span class="label label-success">Available</span>
            <?php
        } else if ($this->student != null && $this->student->id == Auth::user()->student->id ) {
            echo ''?>
            <span class="label label-primary">Approved</span>
            <?php
        } else if ($this->student != null) {
            echo ''?>
            <span class="label label-danger">Not Available</span>
            <?php
        }
    }
}
