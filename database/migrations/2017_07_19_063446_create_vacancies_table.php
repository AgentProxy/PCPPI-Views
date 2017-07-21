<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->mediumText('description');
            $table->string('position',80);
            $table->integer('applicants')->unsigned();;
            $table->tinyInteger('closed');
            $table->integer('region_id')->unsigned();;
            $table->integer('function_id')->unsigned();;
            $table->mediumText('responsibilities');
            $table->mediumText('qualifications');
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
        Schema::dropIfExists('vacancies');
    }
}
