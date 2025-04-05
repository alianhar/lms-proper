<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizzStudentAnswer extends Model
{
    /** @use HasFactory<\Database\Factories\QuizzStudentAnswerFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ["id"];

    public function quizzAttempt(){
        return $this->belongsTo(QuizzAttempt::class);
    }

    public function quizzQuestion(){
        return $this->belongsTo(QuizzQuestion::class);
    }

    public function quizzOption(){
        return $this->belongsTo(QuizzOption::class);
    }


}
