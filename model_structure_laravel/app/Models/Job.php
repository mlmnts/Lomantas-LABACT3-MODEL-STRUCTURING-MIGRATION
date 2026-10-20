<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    protected $table = 'jobs';
    protected $primaryKey = 'job_id';
    public $timestamps = false;
    protected $fillable = ['job_title', 'min_salary', 'max_salary'];

  
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'job_id', 'job_id');
    }
}
