<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_number', 'user_id', 'status', 'order_type',
        'subtotal', 'tax_amount', 'delivery_charge', 'discount_amount', 'total_amount',
        'payment_status', 'payment_method', 'transaction_id',
        'delivery_address', 'delivery_city', 'delivery_pincode',
        'special_instructions', 'outlet_number',
        'estimated_delivery_at', 'delivered_at',
    ];

    protected $casts = [
        'subtotal'              => 'decimal:2',
        'tax_amount'            => 'decimal:2',
        'delivery_charge'       => 'decimal:2',
        'discount_amount'       => 'decimal:2',
        'total_amount'          => 'decimal:2',
        'estimated_delivery_at' => 'datetime',
        'delivered_at'          => 'datetime',
    ];

    /* ── Relationships ─────────────────────────── */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /* ── Helpers ────────────────────────────────── */

    public static function generateOrderNumber(): string
    {
        $date   = now()->format('Ymd');
        $latest = static::whereDate('created_at', today())->count() + 1;
        return 'WE-' . $date . '-' . str_pad($latest, 4, '0', STR_PAD_LEFT);
    }

    public function isDelivered(): bool
    {
        return $this->status === 'delivered';
    }

    public function isCancellable(): bool
    {
        return in_array($this->status, ['pending', 'confirmed']);
    }

    /* ── Scopes ─────────────────────────────────── */

    public function scopeForOutlet($query, string $outlet = '777196074')
    {
        return $query->where('outlet_number', $outlet);
    }
}
