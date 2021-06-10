<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    
    public $timestamp = true;
    
    protected $fillable = ['name','notes'];
}
