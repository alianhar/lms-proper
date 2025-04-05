<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }

    public function enrollments(){
        return $this->hasMany(Enrollment::class);
    }

    public function quizzAttempts(){
        return $this->hasMany(QuizzAttempt::class);
    }

    public function assignmentSubmssions(){
        return $this->hasMany(AssignmentSubmission::class);
    }

    public function classAttendances(){
        return $this->hasMany(ClassAttendance::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function certificates(){
        return $this->hasMany(Certificate::class);
    }

}
