<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();
            $table->string('client_name')->nullable();
            $table->string('duration')->nullable();
            $table->string('team')->nullable();
            $table->string('role')->nullable();
            $table->longText('context_text')->nullable();
            $table->longText('challenge_text')->nullable();
            $table->longText('research_text')->nullable();
            $table->longText('user_text')->nullable();
            $table->longText('design_process_text')->nullable();
            $table->longText('wireframe_text')->nullable();
            $table->longText('interactive_prototype_text')->nullable();
            $table->longText('design_iteration_text')->nullable();
            $table->longText('final_prototype_text')->nullable();
            $table->longText('design_system_text')->nullable();
            $table->longText('final_design_text')->nullable();
            $table->longText('outcome_text')->nullable();
            $table->longText('learning_text')->nullable();
            $table->longText('testimonial_text')->nullable();
            $table->string('testimonial_name')->nullable();

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
        Schema::dropIfExists('portfolios');
    }
}
