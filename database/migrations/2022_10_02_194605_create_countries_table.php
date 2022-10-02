<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->integer("region_id");
            $table->string("name");
            $table->string("full_name");
            $table->string("capital")->nullable();
            $table->string("code")->nullable();
            $table->string("code_alpha3")->nullable();
            $table->string("emoji")->nullable();
            $table->boolean("has_division")->default(false);
            $table->string('currency_code')->nullable();
            $table->string('currency_name')->nullable();
            $table->string('callingcode')->nullable();
            $table->string('tld')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
