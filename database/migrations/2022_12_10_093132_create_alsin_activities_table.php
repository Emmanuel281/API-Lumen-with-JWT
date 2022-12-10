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
        Schema::create('alsin_activities', function (Blueprint $table) {
            $table->id();
            $table->string('id_taksi_alsintan');
            $table->string('id_startgps');
            $table->string('id_ms_alsintan');
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
        Schema::dropIfExists('alsin_activities');
    }
};
