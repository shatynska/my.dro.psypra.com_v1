<?php

namespace App\Models\Contacts;

use App\Models\Contacts\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Locality extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
