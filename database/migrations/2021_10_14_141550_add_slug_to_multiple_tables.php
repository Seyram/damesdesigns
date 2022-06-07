<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToMultipleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('slug')->unique();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->string('slug')->unique();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropUnique('portfolios_slug_unique');
            $table->dropColumn('slug');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropUnique('categories_slug_unique');
            $table->dropColumn('slug');
        });




    }
}
