<?php

namespace App\Models;

use App\Models\Result;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'results';

    // Define the fillable fields to allow mass assignment
    protected $fillable = [
        'student_id',
        'course_id',
        'batch_id',
        'type_id',
        'marks',
        
    ];

    /**
     * Relationship with the Student model.
     * Assuming you have a Student model and a `student_id` column in the `results` table.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Relationship with the Course model.
     * Assuming you have a Course model and a `course_id` column in the `results` table.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * If you have a relationship with the ResultType model (e.g., for types like 'Final', 'Midterm', etc.).
     */
    public function resultType()
    {
        return $this->belongsTo(ResultType::class);
    }

    /**
     * Scope for filtering results by batch
     */
    public function scopeByBatch($query, $batch)
    {
        return $query->where('batch', $batch);
    }

    /**
     * Scope for filtering results by course
     */
    public function scopeByCourse($query, $courseId)
    {
        return $query->where('course_id', $courseId);
    }

}
