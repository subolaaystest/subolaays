<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', static function (Blueprint $table) {
            $table->id();
            $table->string('order_number', 300);
            $table->integer('seller_id')->default(0);
            $table->integer('buyer_id')->nullable();
            $table->integer('coupon_id')->default(0);
            $table->double('coupon_discount')->default(0);
            $table->integer('buyer_address_id')->nullable();
            $table->integer('shipping_method_id')->nullable();
            $table->double('shipping_method_cost')->default(0);
            $table->integer('payment_method_id')->default(0);
            $table->double('sub_total')->default(0);
            $table->double('final_total')->default(0);
            $table->text('notes')->nullable();
            $table->enum('status', ['new', 'under_preparing', 'ready', 'under_delivery', 'completed', 'canceled'])->default('new');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
