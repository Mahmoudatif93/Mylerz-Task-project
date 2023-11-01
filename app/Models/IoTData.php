<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IoTData extends Model
{
    use HasFactory;

    protected $fillable = [
        'temperature',
        'humidity'
    ];

}
