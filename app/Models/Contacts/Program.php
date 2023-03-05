<?php

namespace App\Models\Contacts;

use App\Models\Contacts\OnlineContact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'code',
    ];

    public function onlineContacts(): HasMany
    {
        return $this->hasMany(OnlineContact::class);
    }
}
