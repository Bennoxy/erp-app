<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'deadline',
        'employee_id',
        'status',
        'project_id',
        'milestone_id',
        'created_by',
    ];
}
