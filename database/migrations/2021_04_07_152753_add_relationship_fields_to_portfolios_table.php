<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            //
            $table->unsignedInteger('category_id')->nullable();

            $table->foreign('category_id', 'category_fk_340039')->references('id')->on('categories');
        });
    }


}
