<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FloorsCategoriesUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floors_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categori_name');
            $table->bigInteger('status');
            $table->timestamps();
           // $table->dropColumn('categori_priority');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        $table->dropColumn('categori_priority');
    }
}
