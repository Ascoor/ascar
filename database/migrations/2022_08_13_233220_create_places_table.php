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
            $table->id();
            $table->string('gnump');
            $table->float ('gnumh');
            $table->float ('gnumw');
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
            $table->string('gnump12');
            $table->string('gnump13');
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
        Schema::dropIfExists('places');
    }
};
