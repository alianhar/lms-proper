<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassSession extends Model
{
    /** @use HasFactory<\Database\Factories\ClassSessionFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function class(){
        return $this->belongsTo(Classes::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function classAttendances(){
        return $this->hasMany(ClassAttendance::class);
    }


}
