<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_country')->unsigned();
            $table->foreign('id_country')
                    ->references('id')
                    ->on('countries');
            
            $table->integer('id_action')->unsigned();
            $table->foreign('id_action')
                    ->references('id')
                    ->on('actions');

            $table->string('title_en');
            $table->string('title_jp');
            $table->text('desc_en');
            $table->text('desc_jp');

            $table->string('youtube');

            $table->text('photo_cover');
            $table->text('photo1');
            $table->text('photo2');
            $table->text('photo3');
            $table->text('photo4');
            $table->text('slug');
            
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
        Schema::dropIfExists('activities');
    }
}
