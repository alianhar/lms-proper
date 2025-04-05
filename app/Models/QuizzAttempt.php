<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizzAttempt extends Model
{
    /** @use HasFactory<\Database\Factories\QuizzAttemptFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function quizz(){
        return $this->belongsTo(Quizz::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function enrollment(){
        return $this->belongsTo(Enrollment::class);
    }

    public function quizzStudentAnswers(){
        return $this->hasMany(QuizzStudentAnswer::class);
    }
}
