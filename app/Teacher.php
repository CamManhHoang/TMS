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
        'full_name', 'email', 'description', 'position'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
