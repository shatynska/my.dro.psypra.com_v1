<?php

namespace App\Models;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Duration extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function specialists()
    {
        return $this->belongsToMany(Specialist::class);
    }
}
