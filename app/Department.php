<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name_vn', 'name_en', 'description'
    ];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
