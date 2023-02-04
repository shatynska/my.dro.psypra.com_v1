<?php

namespace App\Models\Contacts;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'specialist_id',
    ];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
}
