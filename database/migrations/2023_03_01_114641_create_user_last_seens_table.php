<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLastSeensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_last_seens', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->enum('status', ['online', 'offline', 'busy']);
            $table->timestamp('last_seen_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_last_seens');
    }
}
