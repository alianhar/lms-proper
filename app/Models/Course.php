<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function courseCategories(){
        return $this->hasMany(CourseCategory::class);
    }

    public function modules(){
        return $this->hasMany(Module::class);
    }

    public function classes(){
        return $this->hasMany(Classes::class);
    }

    public function enrollments(){
        return $this->hasMany(Enrollment::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function certificates(){
        return $this->hasMany(Certificate::class);
    }

}
