<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalSubmission extends Model
{
    use HasFactory;

    // Define the table associated with this model if needed
    protected $table = 'medical_submissions';

    // Define the fillable fields if you want to use mass assignment
    protected $fillable = [
        'student_id', 
        'medical_condition', 
        'submission_date', 
        'medical_report_path', 
        'status'
    ];
}
