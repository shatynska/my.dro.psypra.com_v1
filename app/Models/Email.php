<?php

namespace App\Models;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'specialist_id',
    ];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
}
