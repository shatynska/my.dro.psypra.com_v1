<?php

namespace App\Models\Contacts;

use App\Models\Contacts\Program;
use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OnlineContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'specialist_id',
        'program_id',
    ];

    public function specialist(): BelongsTo
    {
        return $this->belongsTo(Specialist::class);
    }

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
