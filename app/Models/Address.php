<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'post_code',
        'city_name',
        'country_name',
    ];

    public function person():BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
