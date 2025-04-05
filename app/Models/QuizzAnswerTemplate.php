<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizzAnswerTemplate extends Model
{
    /** @use HasFactory<\Database\Factories\QuizzAnswerTemplateFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function quizzQuestion(){
        return $this->belongsTo(QuizzQuestion::class);
    }

}
