<?php

namespace App\Models\Contacts;

use App\Models\Locality;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'locality_id',
        'google_link',
        'google_map',
    ];

    public function specialists()
    {
        return $this->belongsToMany(Specialist::class);
    }

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }
}
