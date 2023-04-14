<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
                $table->id();
                $table->integer('from_user_id');
                $table->integer('to_user_id');
                $table -> string("content");
                $table->date('coment_create_time');
                $table->date('coment_update_time') ->nullable();
                $table->date('coment_delete_time')->nullable();
                $table->boolean('is_delete')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
