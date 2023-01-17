<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'bill_title',
        'department',
        'client_id',
        'date_created',
        'status',
        'notes',
        'subTotal',
        'vat_rate',
        'vat',
        'discount_option',
        'discount',
        'total',
    ];
}
