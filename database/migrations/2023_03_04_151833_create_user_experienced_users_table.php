<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserExperiencedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experienced_users', function (Blueprint $table) {
            $table->id();
            $table->string('id_number');
            $table->string('phone_number');
            $table->string('address');
            $table->string('education_level');
            $table->string('universty');
            $table->string('depatment');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experienced_users');
    }
}
