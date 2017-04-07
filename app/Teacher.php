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
        return $this->belongsToMany(Student::class)->withTimestamps();;
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
        return $this->topics
            ->where('approve', true)
            ->where('student_id', '<>', 0)->count();
    }

    public function count_pending_topics()
    {
        return $this->topics
            ->where('approve', false)
            ->where('student_id', '<>', 0)->count();
    }
}
