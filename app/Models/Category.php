<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_name", 
        "created_at", 
        "updated_at"
    ];

    public function product() {
        return $this->hasMany(Products::class);
    }
}

