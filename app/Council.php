<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Council extends Model
{
    protected $fillable = [
        'council_name', 'chairman', 'secretary'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
