<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
