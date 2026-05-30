<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id', 'name', 'slug', 'description',
        'price', 'discount_price', 'image_url',
        'food_type', 'is_available', 'is_featured',
        'is_bestseller', 'prep_time_minutes', 'tags',
    ];

    protected $casts = [
        'price'              => 'decimal:2',
        'discount_price'     => 'decimal:2',
        'is_available'       => 'boolean',
        'is_featured'        => 'boolean',
        'is_bestseller'      => 'boolean',
        'tags'               => 'array',
    ];

    /* ── Relationships ─────────────────────────── */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /* ── Accessors ──────────────────────────────── */

    public function getEffectivePriceAttribute(): float
    {
        return $this->discount_price ?? $this->price;
    }

    public function getAverageRatingAttribute(): float
    {
        return round($this->reviews()->where('is_approved', true)->avg('rating') ?? 0, 1);
    }

    /* ── Scopes ─────────────────────────────────── */

    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeBestsellers($query)
    {
        return $query->where('is_bestseller', true);
    }
}
