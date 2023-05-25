<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait, HasFactory;
    protected $table = "user";

    protected $fillable = [
        'fullname',
        'password',
        'phone',
        'address',
        'avartar', 
        'link' 
    ];

    public function kidInfo(): HasMany
    {
        return $this->hasMany(KidProfile::class);
    }

    public function product(): HasMany
    {
        return $this->hasMany(Products::class);
    }
}
