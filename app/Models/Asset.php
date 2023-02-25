<?php

namespace App\Models;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'specialist_id',
        'type',
        'format',
        'description',
    ];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
}
