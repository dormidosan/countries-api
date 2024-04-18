<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Http;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'product_id',
        'city_id'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }



}
