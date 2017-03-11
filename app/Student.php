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

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function topic_approved()
    {
        return Auth::user()->student->topics->contains('approve', 1);
    }
}
