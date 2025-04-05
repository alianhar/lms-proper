<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enrollment extends Model
{
    /** @use HasFactory<\Database\Factories\EnrollmentFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function class(){
        return $this->belongsTo(Classes::class);
    }

    public function lessonProgresses(){
        return $this->hasMany(LessonProgress::class);
    }

    public function quizzAttempts(){
        return $this->hasMany(QuizzAttempt::class);
    }

    public function assignmentSubmissions(){
        return $this->hasMany(AssignmentSubmission::class);
    }

}
