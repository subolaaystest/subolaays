<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', static function (Blueprint $table) {
            $table->id();
            $table->integer('buyer_id')->nullable();
            $table->date('deal_expired')->nullable();
            $table->unsignedBigInteger('main_category_id')->nullable();
            $table->integer('seller_id')->default(0);
            $table->enum('status', ['active', 'not_active'])->default('active')->comment("active/not_active");
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
        Schema::dropIfExists('deals');
    }
}
