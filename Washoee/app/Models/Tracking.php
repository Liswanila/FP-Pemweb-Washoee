<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    /**
     * Update the status of the tracking record.
     *
     * @param string $status
     * @return void
     */
    use HasFactory;

    protected $primaryKey = 'tracking_id';

    protected $fillable = [
        'tracking_number', 'status', 'payment_id'
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'payment_id');
    }

}

