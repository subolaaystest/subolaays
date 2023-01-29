<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_translations', static function (Blueprint $table) {
            $table->id();
            $table->integer('setting_id');
            $table->string('locale', 30);
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('about_subolay')->nullable();
            $table->text('privacy')->nullable();
            $table->text('terms_and_conditions')->nullable();
            $table->text('keywords')->nullable();
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
        Schema::dropIfExists('setting_translations');
    }
}
