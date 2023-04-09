<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class user extends Model implements Authenticatable
{
    use AuthenticableTrait, HasFactory;
    protected $table = "user";

    protected $fillable = [
        'fullname',
        'phone',
        'password',
    ];
}
