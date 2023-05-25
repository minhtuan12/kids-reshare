<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Validator;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'prod_name',
        'user_id',
        'descr',
        'buy_date',
        'condition',
        'material',
        'size',
        'category_id',
        'img',
    ];

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['category']))
            $query->where('category_name', '=', $filters['category']);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
