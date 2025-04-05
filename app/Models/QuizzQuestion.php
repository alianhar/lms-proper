<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizzQuestion extends Model
{
    /** @use HasFactory<\Database\Factories\QuizzQuestionFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function quizz(){
        return $this->belongsTo(Quizz::class);
    }

    public function quizzOptions(){
        return $this->hasMany(QuizzOption::class);
    }

    public function quizzAnswerTemplate(){
        return $this->hasOne(QuizzAnswerTemplate::class);
    }


}
