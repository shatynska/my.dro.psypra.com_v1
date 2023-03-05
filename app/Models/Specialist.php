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
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Specialist extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


    protected $fillable = [
        'name',
        'last_name',
        'education',
        'method',
        'about',
    ];


    protected static function boot(): void
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


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function specialties(): BelongsToMany
    {
        return $this->belongsToMany(Specialty::class);
    }

    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class);
    }

    public function quantities(): BelongsToMany
    {
        return $this->belongsToMany(Quantity::class);
    }

    public function ages(): BelongsToMany
    {
        return $this->belongsToMany(Age::class);
    }

    public function queries(): BelongsToMany
    {
        return $this->belongsToMany(Query::class);
    }

    public function durations(): BelongsToMany
    {
        return $this->belongsToMany(Duration::class);
    }

    public function directions(): BelongsToMany
    {
        return $this->belongsToMany(Direction::class);
    }

    public function prices(): BelongsToMany
    {
        return $this->belongsToMany(Price::class);
    }

    public function days(): BelongsToMany
    {
        return $this->belongsToMany(Day::class);
    }

    public function phoneNumbers(): HasMany
    {
        return $this->hasMany(PhoneNumber::class);
    }

    public function emails(): HasMany
    {
        return $this->hasMany(Email::class);
    }

    public function websites(): HasMany
    {
        return $this->hasMany(Website::class);
    }

    public function addresses(): BelongsToMany
    {
        return $this->belongsToMany(Address::class);
    }

    public function onlineContacts(): HasMany
    {
        return $this->hasMany(OnlineContact::class);
    }
}
