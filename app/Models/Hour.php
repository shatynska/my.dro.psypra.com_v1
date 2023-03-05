<?php

namespace App\Models;

use App\Models\Day;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Hour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'day_id',
    ];

    public function specialists(): BelongsToMany
    {
        return $this->belongsToMany(Specialist::class);
    }

    public function day(): BelongsTo
    {
        return $this->belongsTo(Day::class);
    }
}
