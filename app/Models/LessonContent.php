<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LessonContent extends Model
{
    /** @use HasFactory<\Database\Factories\LessonContentFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }
}
