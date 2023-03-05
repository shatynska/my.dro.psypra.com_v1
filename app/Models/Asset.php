<?php

namespace App\Models;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function specialist(): BelongsTo
    {
        return $this->belongsTo(Specialist::class);
    }
}
