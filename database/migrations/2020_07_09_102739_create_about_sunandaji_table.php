<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutSunandajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_sunandaji', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('main_title');
            $table->longText('main_description');
            $table->String('banner_image');
            $table->String('secondary_title');
            $table->longText('secondary_sub_description');
            $table->longText('secondary_description');
            $table->String('about_image');
            $table->longText('link_1');
            $table->longText('link_2');
            $table->longText('link_3');
            $table->longText('link_4');
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
        Schema::dropIfExists('about_sunandaji');
    }
}
