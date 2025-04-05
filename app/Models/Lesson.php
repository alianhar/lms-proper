<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    /** @use HasFactory<\Database\Factories\LessonFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function lessonContent(){
        return $this->hasOne(LessonContent::class);
    }

    public function quizz(){
        return $this->hasOne(Quizz::class);
    }

    public function assignment(){
        return $this->hasOne(Assignment::class);
    }
}
