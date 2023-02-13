<?php

namespace App\Models;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Education extends Model
{
    use HasFactory;

    public $fillable = [
        'specialist_id',
        'text',
    ];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
}
