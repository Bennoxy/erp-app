<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details_bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'bill_id',
        'item_description',
        'part_no',
        'uom',
        'quantity',
        'unit_price',
        'amount',
    ];
}
