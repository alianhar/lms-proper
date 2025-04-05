<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quizz extends Model
{
    /** @use HasFactory<\Database\Factories\QuizzFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function lesson(){
        return $this->belongsTo(Quizz::class);
    }

    public function quizzQuestions(){
        return $this->hasMany(QuizzQuestion::class);
    }

    public function quizzAttempts(){
        return $this->hasMany(QuizzAttempt::class);
    }

}
