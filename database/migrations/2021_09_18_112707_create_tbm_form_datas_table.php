<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFormDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_form_datas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('runner_id')->unsigned();
            $table->foreign('runner_id')->references('id')->on('tbm_runners')->onDelete('cascade');
            $table->integer('age');
            $table->enum('sex', ['G', 'M']);
            $table->enum('colour', ['B','W','A']);
            $table->string('sire');
            $table->string('dam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbm_form_datas');
    }
}
