<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
    /** @use HasFactory<\Database\Factories\ClassesFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function classType(){
        return $this->belongsTo(ClassType::class);
    }

    public function classSessions(){
        return $this->hasMany(ClassSession::class);
    }

    public function enrollments(){
        return $this->hasMany(Enrollment::class);
    }


}
