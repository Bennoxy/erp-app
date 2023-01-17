<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiclelog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'model',
        'plate_no',
        'destination',
        'date',
        'time_out',
        'time_in',
    ];
}
