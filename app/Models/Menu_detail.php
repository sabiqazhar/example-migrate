<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_detail extends Model
{
    use HasFactory;

    protected $table = [
        'menu_id',
        'menu_category',
        'description',
        'carbo'
    ];

    protected $cast = [
        'salad' => 'array',
        'sauce' => 'array'
    ];
}
