<?php

namespace App\Models\Contacts;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhoneNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'specialist_id',
    ];

    public function specialist(): BelongsTo
    {
        return $this->belongsTo(Specialist::class);
    }
}
