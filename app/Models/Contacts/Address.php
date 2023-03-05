<?php

namespace App\Models\Contacts;

use App\Models\Locality;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'locality_id',
        'google_link',
        'google_map',
    ];

    public function specialists(): BelongsToMany
    {
        return $this->belongsToMany(Specialist::class);
    }

    public function locality(): BelongsTo
    {
        return $this->belongsTo(Locality::class);
    }
}
