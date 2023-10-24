<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuComplement extends Model
{
    use HasFactory;
    protected $table = 'menu_has_complement';

    protected $fillable = [
        'menu_id',
        'complement_id'
    ];
}
