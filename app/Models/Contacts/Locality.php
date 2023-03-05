<?php

namespace App\Models\Contacts;

use App\Models\Contacts\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Locality extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }
}
