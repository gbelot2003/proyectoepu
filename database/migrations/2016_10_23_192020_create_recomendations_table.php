<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecomendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('recomendations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('country_id')->unsigned()->index();
            $table->integer('total');
            $table->timestamps();
        });

        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
        });

        Schema::create('rights', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeofright')->unsigned()->index();
            $table->string('name');
                                                                                                                                    });


        Schema::create('institution_recomendation', function(Blueprint $table)
        {
            $table->integer('institution_id')->unsigned()->index();
            $table->foreign('institution_id')
                ->references('id')
                ->on('institutions')
                ->onDelete('cascade');
            $table->integer('recomendation_id')->unsigned()->index();
            $table->foreign('recomendation_id')
                ->references('id')
                ->on('recomendations')
                ->onDelete('cascade');
        });

        Schema::create('recomendation_right', function(Blueprint $table)
        {
            $table->integer('right_id')->unsigned()->index();
            $table->foreign('right_id')
                ->references('id')
                ->on('rights')
                ->onDelete('cascade');
            $table->integer('recomendation_id')->unsigned()->index();
            $table->foreign('recomendation_id')
                ->references('id')
                ->on('recomendations')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('institution_recomendation');
        Schema::dropIfExists('recomendation_right');
        Schema::dropIfExists('institutions');
        Schema::dropIfExists('rights');
        Schema::dropIfExists('recomendations');



    }
}
