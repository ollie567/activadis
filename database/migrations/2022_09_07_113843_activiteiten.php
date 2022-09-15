<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activiteiten', function (Blueprint $table) {
            $table->id('ID');
            $table->string('activiteitnaam');
            $table->string('activiteitlocatie');
            $table->string('activeitomschrijving');
            $table->boolean('activeiteten');
            $table->integer('activiteitmindeelnemers');
            $table->integer('activiteitmaxdeelnemers');
            $table->float('activiteitkosten');
            $table->string('activiteitbenodigheden');
            $table->string('activiteitbegintijd');
            $table->string('activiteiteindtijd');
            $table->string('activiteitafbeelding');
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
        Schema::dropIfExists('activiteiten');
    }
};
