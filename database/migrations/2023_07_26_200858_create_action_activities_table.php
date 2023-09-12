<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_activities', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_action')->unsigned();
            $table->foreign('id_action')
                    ->references('id')
                    ->on('actions');
            
            $table->integer('id_activity')->unsigned();
            $table->foreign('id_activity')
                    ->references('id')
                    ->on('activities');

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
        Schema::dropIfExists('action_activities');
    }
}
