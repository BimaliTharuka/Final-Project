<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;

    // Define the fillable fields
    protected $fillable = [
        'name', 
        'description', 
        'course_id'
    ];

    // Relationship with Course model (if module belongs to a course)
    public function course()
    {
        return $this->belongsTo(Course::class);
    }


}
