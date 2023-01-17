<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'trade',
        'address',
        'enrollment_Year',
        'gender',
        'state_of_Origin',
        'local_Government',
        'highest_Qualification',
        'institution',
        'professional_Qualification',
        'ambition',
        'phone',
        'email'
    ];
}
