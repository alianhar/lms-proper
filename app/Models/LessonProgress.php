<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LessonProgress extends Model
{
    /** @use HasFactory<\Database\Factories\LessonProgressFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function enrollment(){
        return $this->belongsTo(Enrollment::class);
    }

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

}
