<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassType extends Model
{
    /** @use HasFactory<\Database\Factories\ClassTypeFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function classes(){
        return $this->hasMany(Classes::class);
    }

}
