<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }

    public function classSessions(){
        return $this->hasMany(ClassSession::class);
    }

    public function assignmentSubmissions(){
        return $this->hasMany(AssignmentSubmission::class);
    }

}
