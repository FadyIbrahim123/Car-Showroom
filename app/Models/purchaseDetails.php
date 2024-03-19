<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;

    protected $table = 'purchaseDetails'; // Specify the table name

    protected $fillable = [
        'car_model',
        'car_color',
        'car_price',
        'first_name',
        'last_name',
        'email',
        'contact_number',
    ];
    public $timestamps = false;

}
