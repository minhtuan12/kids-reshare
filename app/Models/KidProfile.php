<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KidProfile extends Model
{
    protected $table = "kid_info";

    protected $fillable = [
        'age',
        'gender',
        'user_id',
        'height',
        'weight',
        'take_note',
    ];

    public function user() {
        return $this->belongsTo(user::class, 'user_id');
    }

}
