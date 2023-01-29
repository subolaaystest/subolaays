<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_categories', static function (Blueprint $table) {
            $table->increments('id');
            $table->enum('appear_on_homepage', ['yes', 'no'])->default('no');
            $table->integer('created_by')->default(0);
            $table->string('image', 300)->nullable();
            $table->enum('status', ['under_process', 'active', 'not_active'])->default('active');
            $table->timestamp('created_at')->nullable()->useCurrent();
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
        Schema::dropIfExists('main_categories');
    }
}
