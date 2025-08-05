<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCard extends Model
{
    use HasFactory;
    protected $table = 'foodcards';
    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'cardType',
    ];
}
