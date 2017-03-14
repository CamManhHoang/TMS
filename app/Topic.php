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
        return $this->belongsTo(Student::class);
    }

    public function topic_available()
    {
        return $this->student == null;
    }

    public function topic_pending()
    {
        return $this->student != null && $this->approve == 0 && $this->student_id == Auth::user()->student->id;
    }

    public function topic_not_available()
    {
        return $this->student != null;
    }

    public function status()
    {
        if ($this->topic_pending()) {
            echo ''?>
            <span class="label label-primary">Pending</span>
            <?php
        } else if ($this->topic_not_available()) {
            echo ''?>
            <span class="label label-danger">Not Available</span>
            <?php
        } else if ($this->topic_available()) {
            echo ''?>
            <span class="label label-success">Available</span>
            <?php
        }
    }

    public function research_status()
    {
        if ($this->student != null && $this->approve == 1) {
            echo ''?>
            <span class="label label-danger">Đã có sinh viên tham gia</span>
            <?php
        } else if ($this->student != null && $this->approve == 0){
            echo ''?>
            <span class="label label-info">Đang có sv đăng ký</span>
            <?php
        } else {
            echo '' ?>
            <span class="label label-success">Còn trống</span>
            <?php
        }
    }
}
