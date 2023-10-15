<?php

namespace App\Models;

use App\Enums\PersonGenderEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'gender',
    ];

    protected $casts = [
        'gender' => PersonGenderEnum::class,
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
