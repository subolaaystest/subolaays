<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', static function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['main', 'sub1', 'sub2'])->nullable();
            $table->string('image', 300);
            $table->string('url', 300)->nullable();
            $table->enum('status', ['active', 'not_active']);
            $table->integer('visit')->default(0);
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
        Schema::dropIfExists('ads');
    }
}
