<?php

namespace App\Models;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Direction extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function specialists(): BelongsToMany
    {
        return $this->belongsToMany(Specialist::class);
    }
}
