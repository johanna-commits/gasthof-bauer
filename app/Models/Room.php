<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'single_room_regular_price',
        'double_room_regular_price',
        'single_room_christmas_price',
        'double_room_christmas_price'
    ];
}
