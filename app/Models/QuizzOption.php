<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizzOption extends Model
{
    /** @use HasFactory<\Database\Factories\QuizzOptionFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function quizzQuestion(){
        return $this->belongsTo(QuizzQuestion::class);
    }
}
