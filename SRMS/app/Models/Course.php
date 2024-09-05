<?php

namespace App\Models;

use App\Models\Batch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{ 
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }
}
