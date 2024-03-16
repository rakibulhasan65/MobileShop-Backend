<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('name');
            $table->string('order_invoice')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('zip_code');
            $table->string('mobile');
            $table->string('email');
            $table->double('total');
            $table->double('shipping_charge')->nullable();
            $table->string('coupon_code')->nullable();
            $table->double('coupon_amount')->nullable();
            $table->string('order_status')->default('New')->comment('For Shipped, Delivered or Proccedsing');
            $table->string('payment_method')->comment('For COD or BANK or Mobile Banking');
            $table->string('payment_gateway')->comment('For COD or BANK or Mobile Banking');
            $table->double('grand_total');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
