<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promo';

    protected $fillabe = [
        'account_id',
        'image',
        'promo_name',
        'type',
        'description',
        'detail_tutorial',
        'detail_codition',
    ];
}
