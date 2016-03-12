<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('studding');
            $table->string('degree');
            $table->string('field');
            $table->string('grade');
            $table->mediumText('activities');
            $table->mediumText('description');
            $table->integer('sort_order')->default(0);
            $table->boolean('enable');
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
        Schema::drop('education');
    }
}
