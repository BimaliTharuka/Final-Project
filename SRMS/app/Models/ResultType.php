<?php

namespace App\Models;

use App\Models\ResultType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResultType extends Model
{
    use HasFactory;
    
    // Define the table name (optional if following Laravel conventions)
    protected $table = 'result_types';

    // Define the fillable fields to allow mass assignment
    protected $fillable = ['name'];

    /**
     * Relationship with the Result model.
     * Assuming the results table has a `result_type_id` column.
     */
    public function results()
    {
        return $this->hasMany(Result::class, 'type_id');
    }
}
