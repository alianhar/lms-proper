<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssignmentSubmission extends Model
{
    /** @use HasFactory<\Database\Factories\AssignmentSubmissionFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function assignment(){
        return $this->belongsTo(Assignment::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function enrollment(){
        return $this->belongsTo(Enrollment::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
