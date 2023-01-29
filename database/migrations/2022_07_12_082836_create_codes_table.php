<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('sellers', 'id')->onDelete('cascade');
            $table->enum('user_type', ['seller', 'buyer'])->nullable();
            $table->string('code', 10);
            $table->integer('used')->default(0);
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
        Schema::dropIfExists('codes');
    }
}
