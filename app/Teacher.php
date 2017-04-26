<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'email',
        'description',
        'position'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function researches()
    {
        return $this->hasMany(Research::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class)->withTimestamps()->withPivot('teacher_approve', 'student_approve');
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function count_student_topics()
    {
        return $this->students()
            ->where('teacher_approve', true)
            ->where('student_approve', true)->count();
    }

    public function count_students_register()
    {
        return $this->students()
            ->where('teacher_approve', false)
            ->where('student_approve', false)->count();
    }
}
