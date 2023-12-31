<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complement extends Model
{
    use HasFactory;

    protected $table = 'complement';

    protected $fillable = [
        'name',
        'image',
        'type'
    ];
}
