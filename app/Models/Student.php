<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $guarded = [];
    
    public function jurusans(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class);
    } 

}
