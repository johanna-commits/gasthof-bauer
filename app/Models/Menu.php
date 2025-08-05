<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu1_date',
        'menu1_soup',
        'menu1_main_course',
        'menu1_dessert',
        'menu2_date',
        'menu2_soup',
        'menu2_main_course',
        'menu2_dessert',
        'menu3_date',
        'menu3_soup',
        'menu3_main_course',
        'menu3_dessert',
        'menu_price'
    ];
}
