<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

 /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;    protected $fillable = [
        'name', 'description', 'price',
    ];
}
