<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assignment extends Model
{
    /** @use HasFactory<\Database\Factories\AssignmentFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

    public function assignmentSubmissions(){
        return $this->hasMany(AssignmentSubmission::class);
    }
}
