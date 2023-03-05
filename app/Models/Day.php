<?php

namespace App\Models;

use App\Models\Hour;
use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Day extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function hours(): HasMany
    {
        return $this->hasMany(Hour::class);
    }
}
