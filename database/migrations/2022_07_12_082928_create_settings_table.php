<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', static function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 255)->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('whatsapp', 300)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('linked_in', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('snapchat', 300)->nullable();
            $table->string('telegram', 300)->nullable();
            $table->string('youtube', 300)->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->integer('order_point')->default(0);
            $table->integer('share_points')->default(0);
            $table->integer('deal_points')->default(0);
            $table->integer('stories_count')->default(0);
            $table->integer('deals_count')->default(0);
            $table->integer('daily_stories_count')->default(0);
            $table->integer('daily_deals_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
