<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', static function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id')->default(0);
            $table->string('name', 350);
            $table->dateTime('start');
            $table->dateTime('end');
            $table->text('description')->nullable();
            $table->double('discount');
            $table->enum('coupon_type', ['fixed', 'percent'])->nullable();
            $table->enum('free_shipping', ['yes', 'no'])->nullable();
            $table->enum('exclude_offer_products', ['yes', 'no'])->nullable();
            $table->integer('minimum_purchases')->default(0);
            $table->integer('all_frequency_use')->default(0);
            $table->integer('buyer_frequency_use')->default(0);
            $table->string('status', 15)->default('active')->comment("active/not_active");
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
