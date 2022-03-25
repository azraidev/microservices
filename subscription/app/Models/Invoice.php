<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan_id',
        'invoice_number',
        'charge_id',
        'amount',
        'name',
        'email',
        'address',
        'phone_number',
        'country',
    ];
}
