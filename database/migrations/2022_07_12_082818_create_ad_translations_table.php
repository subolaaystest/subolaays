<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_translations', static function (Blueprint $table) {
            $table->id();
            $table->integer('ad_id');
            $table->string('locale', 30);
            $table->string('title', 300)->nullable();
            $table->text('details')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('ad_translations');
    }
}
