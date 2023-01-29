<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\Type;

class ChangeEnumStatusInTableDeals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Type::hasType('enum')) {
            Type::addType('enum', StringType::class);
        }
        Schema::table('deals', function (Blueprint $table) {
            $table->enum('status', ['active', 'not_active', 'draft'])->change()->default('active')->comment("active/not_active");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deals', function (Blueprint $table) {
            //
        });
    }
}
