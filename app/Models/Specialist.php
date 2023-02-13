<?php

namespace App\Models;

use App\Models\Age;
use App\Models\Day;
use App\Models\User;
use App\Models\Asset;
use App\Models\Price;
use App\Models\Query;
use App\Models\Duration;
use App\Models\Quantity;
use App\Models\Direction;
use App\Models\Education;
use App\Models\Specialty;
use App\Models\Contacts\Email;
use App\Models\Contacts\Address;
use App\Models\Contacts\Website;
use Spatie\MediaLibrary\HasMedia;
use App\Models\Contacts\PhoneNumber;
use App\Models\Contacts\OnlineContact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Specialist extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


    protected $fillable = [
        'name',
        'last_name',
    ];


    protected static function boot()
    {
        parent::boot();

        self::addGlobalScope('user', function (Builder $builder) {
            $builder->where('id', auth()->id());
        });
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('small')
            ->performOnCollections('small_photos')
            ->crop('crop-center', 256, 256);

        $this->addMediaConversion('big')
            ->performOnCollections('big_photos')
            ->crop('crop-center', 544, 812);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function quantities()
    {
        return $this->belongsToMany(Quantity::class);
    }

    public function ages()
    {
        return $this->belongsToMany(Age::class);
    }

    public function queries()
    {
        return $this->belongsToMany(Query::class);
    }

    public function durations()
    {
        return $this->belongsToMany(Duration::class);
    }

    public function directions()
    {
        return $this->belongsToMany(Direction::class);
    }

    public function prices()
    {
        return $this->belongsToMany(Price::class);
    }

    public function days()
    {
        return $this->belongsToMany(Day::class);
    }

    public function phoneNumbers()
    {
        return $this->hasMany(PhoneNumber::class);
    }

    public function emails()
    {
        return $this->hasMany(Email::class);
    }

    public function websites()
    {
        return $this->hasMany(Website::class);
    }

    public function addresses()
    {
        return $this->belongsToMany(Address::class);
    }

    public function onlineContacts()
    {
        return $this->hasMany(OnlineContact::class);
    }

    public function education()
    {
        return $this->belongsTo(Education::class);
    }
}
