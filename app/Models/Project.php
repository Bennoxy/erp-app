<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_title',
        'description',
        'client_id',
        'employee_id',
        'subcontractor_id',
        'freelancer_id',
        'start_date',
        'due_date',
        'project_bill',
        'project_amount',
        'status',
        'progress',
    ];
}
