<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->longText("about");
            $table->integer("happy_client");
            $table->integer("project");
            $table->integer("years_of_experience");
            $table->integer("awards");
            $table->string("phone_number");
            $table->longText("location");
            $table->longText("map_location");
            $table->string("email");
            $table->string("phone_number_2")->nullable();
            $table->string("twitter")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("skype")->nullable();
            $table->string("linked_in")->nullable();
            $table->string("skill_img");
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
        Schema::dropIfExists('settings');
    }
}
