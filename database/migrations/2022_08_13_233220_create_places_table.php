<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gnump');
            $table->double('gnumh');
            $table->double('gnumw');
            $table->string('gnump1');
            $table->string('gnump2');
            $table->string('gnump3');
            $table->string('gnump4');
            $table->string('gnump5');
            $table->string('gnump6');
            $table->string('gnump7');
            $table->string('gnump8');
            $table->string('gnump9');
            $table->string('gnump10');
            $table->string('gnump11');
            $table->integer('gnump12')->unsigned();
            $table->string('gnump13')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();

            $table->softDeletes();
            $table->timestamps();
            $table->foreign('gnump12')->references('id')->on('users')
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
        Schema::dropIfExists('places');
    }
};
