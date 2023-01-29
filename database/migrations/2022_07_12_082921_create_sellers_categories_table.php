<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers_categories', static function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number_stories_required')->default(0);
            $table->integer('number_deals_required')->default(0);
            $table->string('image', 300)->nullable();
            $table->integer('approve')->default(1);
            $table->enum('status', ['active', 'not_active'])->default('active');
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
        Schema::dropIfExists('sellers_categories');
    }
}
