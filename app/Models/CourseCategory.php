<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseCategory extends Model
{
    /** @use HasFactory<\Database\Factories\CourseCategoryFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function courseCategory(){
        return $this->belongsTo(CourseCategory::class);
    }

    public function courseCategories(){
        return $this->hasMany(CourseCategory::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
