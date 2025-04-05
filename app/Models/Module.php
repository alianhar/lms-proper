<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    /** @use HasFactory<\Database\Factories\ModuleFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
