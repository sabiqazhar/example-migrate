<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlets extends Model
{
    use HasFactory;

    protected $table = 'outlets';

    // protected $nullable = [
    //     'gofood_link',
    //     'shopeefood_link',
    //     'grabfood_link',
    //     'travelokaeats_link',
    // ];

    protected $fillable = [
        'slug',
        'outlet_name',
        'address',
        'lat',
        'lon',
        'operation_time',
        'contact',
        'menu_id',
        'gofood_link',
        'shopeefood_link',
        'grabfood_link',
        'travelokaeats_link',
    ];
}
