<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model
{
    /** @use HasFactory<\Database\Factories\CertificateFactory> */
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function certificate(){
        return $this->belongsTo(Certificate::class);
    }
}
