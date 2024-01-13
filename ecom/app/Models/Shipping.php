<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $primaryKey = 'shippingID';
    protected $fillable = [
        'shippingID',
        'provinceID',
        'shippingExpense'
    ];
}
