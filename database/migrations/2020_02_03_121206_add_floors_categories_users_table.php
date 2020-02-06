<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFloorsCategoriesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('floors_categories', function (Blueprint $table) {
            $table->string('categori_priority');
            $table->dropColumn('categori_priority');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('floors_categories', function (Blueprint $table) {
            $table->dropColumn('categori_priority');
        });
    }
}
