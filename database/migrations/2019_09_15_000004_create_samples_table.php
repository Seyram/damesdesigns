<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamplesTable extends Migration
{
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->increments('id');

            $table->string('sample_one_title')->nullable();

            $table->longText('sample_one_description')->nullable();
            $table->string('sample_one_link')->nullable();
            $table->string('sample_two_title')->nullable();

            $table->longText('sample_two_description')->nullable();
            $table->string('sample_two_link')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
