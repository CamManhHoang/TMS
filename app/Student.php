<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        return $this->hasOne(User::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
