<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'position',
        'department_id',
        'address',
        'employment_Year',
        'email',
        'phone',
        'gender',
        'state_of_Origin',
        'local_Government',
        'marital_Status',
        'no_of_Children',
        'date_of_Birth',
        'nOK_Name',
        'nOK_Phone',
        'nOK_Address',
        'nOK_Relationship',
        'highest_Qualification',
        'institution',
        'professional_Qualification',
        'ambition',
        'blood_Group',
        'genotype',
        'allergies',
        'hobbies',
        'language_Proficiency',
        'personal_Core_Values',
        'image',
    ];
}
