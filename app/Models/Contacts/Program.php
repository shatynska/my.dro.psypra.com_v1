<?php

namespace App\Models\Contacts;

use App\Models\Contacts\OnlineContact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'code',
    ];

    public function onlineContacts()
    {
        return $this->hasMany(OnlineContact::class);
    }
}
