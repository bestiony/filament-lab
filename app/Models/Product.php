<?php

namespace App\Models;

use App\ProductTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $casts = [
        'type' => ProductTypeEnum::class
    ];
    protected $guarded = [];

    // ******** RELATIONSHIPS *********

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
