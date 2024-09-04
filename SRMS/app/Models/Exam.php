<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_name', 
        'exam_date', 
        'course'
    ];

    public function admissionRequests()
    {
        return $this->hasMany(AdmissionRequest::class);
    }

    public function resitRequests()
    {
        return $this->hasMany(ResitRequest::class);
    }
}

    
