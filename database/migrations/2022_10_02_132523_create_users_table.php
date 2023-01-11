<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("surname");
            $table->string("username");
            $table->timestamp("birthday");
            $table->integer("gender_id");
            $table->string("email");
            $table->string("phone");
            $table->integer("city_id");
            $table->integer("sub_city_id")->nullable();
            $table->string("street")->nullable();
            $table->integer("country_id")->nullable();
            $table->string("web_site")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("twitter")->nullable();
            $table->string("linkedln")->nullable();
            $table->string("youtube")->nullable();
            $table->string("pinterest")->nullable();
            $table->integer("db_name")->nullable();
            $table->string("password");
            $table->boolean("status")->nullable();
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
        Schema::dropIfExists('users');
    }
}