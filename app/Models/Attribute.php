<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'database',
        'is_extendable',
        'is_main_attribute',
        'title1',
        'title2',
        'title3',
    ];
}
