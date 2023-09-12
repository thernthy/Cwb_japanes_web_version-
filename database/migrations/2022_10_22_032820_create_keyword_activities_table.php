<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeywordActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyword_activities', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_keyword')->unsigned();
            $table->foreign('id_keyword')
                    ->references('id')
                    ->on('keywords');
            
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
        Schema::dropIfExists('keyword_activities');
    }
}
