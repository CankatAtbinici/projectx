<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingPlaningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_planings', function (Blueprint $table) {
            $table->id();
            $table->integer("client_id");
            $table->integer("exp_id");
            $table->date("request_time");
            $table->date("reservation_time");
            $table->integer("status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meeting_planings');
    }
}
