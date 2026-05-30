<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number', 20)->unique();   // e.g. WE-20240522-0001
            $table->foreignId('user_id')->constrained()->restrictOnDelete();
            $table->enum('status', [
                'pending', 'confirmed', 'preparing',
                'out_for_delivery', 'delivered', 'cancelled'
            ])->default('pending');
            $table->enum('order_type', ['dine_in', 'takeaway', 'delivery'])->default('delivery');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('tax_amount', 8, 2)->default(0.00);
            $table->decimal('delivery_charge', 8, 2)->default(0.00);
            $table->decimal('discount_amount', 8, 2)->default(0.00);
            $table->decimal('total_amount', 10, 2);
            $table->enum('payment_status', ['pending', 'paid', 'failed', 'refunded'])->default('pending');
            $table->enum('payment_method', ['cash', 'upi', 'card', 'wallet'])->default('cash');
            $table->string('transaction_id')->nullable();
            $table->string('delivery_address')->nullable();
            $table->string('delivery_city', 100)->nullable();
            $table->string('delivery_pincode', 10)->nullable();
            $table->text('special_instructions')->nullable();
            $table->string('outlet_number', 20)->default('777196074');
            $table->timestamp('estimated_delivery_at')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['user_id', 'status']);
            $table->index('order_number');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
