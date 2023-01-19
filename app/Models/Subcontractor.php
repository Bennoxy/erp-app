<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcontractor extends Model
{
    use HasFactory;
    protected $fillable = [
        'subcontractor',
        'location',
        'contact_name',
        'email',
        'phone',
        'trade'
    ];
}
