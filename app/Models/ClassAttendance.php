<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassAttendance extends Model
{
    /** @use HasFactory<\Database\Factories\ClassAttendanceFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function classSession(){
        return $this->belongsTo(ClassSession::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
