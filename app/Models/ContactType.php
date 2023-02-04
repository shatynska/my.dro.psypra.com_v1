<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'database',
    ];
}
