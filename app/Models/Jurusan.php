<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $guarded = [];
    
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
