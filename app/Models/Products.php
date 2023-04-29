<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'prod_name',
        'descr',
        'buy_date',
        'condition',
        'material',
        'size',
        'category_id',
        'img',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['category']))
            $query->where('category_name', '=', $filters['category']);
    }
}
