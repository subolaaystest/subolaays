<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals_offers', static function (Blueprint $table) {
            $table->id();
            $table->integer('deal_id')->nullable();
            $table->integer('seller_id')->default(0);
            $table->date('shipping_time')->nullable();
            $table->integer('shipping_method_id')->nullable();
            $table->double('total_price')->nullable();
            $table->text('notes')->nullable();
            $table->integer('coupon_id')->nullable();
            $table->integer('payment_method_id')->nullable();
            $table->double('final_amount')->nullable();
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
        Schema::dropIfExists('deals_offers');
    }
}
