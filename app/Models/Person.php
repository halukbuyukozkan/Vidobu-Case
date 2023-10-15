<?php

namespace App\Models;

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

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
