<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $primaryKey = 'payment_id';

    protected $fillable = [
        'name', 'email_address', 'address', 'card_number', 'expiry_date', 'cvc', 'selected_plan', 'service_id'
    ];

    public function tracking()
    {
        return $this->hasOne(Tracking::class, 'payment_id', 'payment_id');
    }
}
