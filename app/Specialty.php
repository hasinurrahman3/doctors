<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    // 
    // 
    
    protected $fillable = ['name'];

    public function doctors()
    {
    	return $this->belongsToMany(Doctor::class);
    }
}
