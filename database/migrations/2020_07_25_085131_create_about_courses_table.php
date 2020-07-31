<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_courses', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('main_title');
            $table->longText('main_sub_description');
            $table->String('banner_image');
            $table->String('secondary_title');
            $table->longText('secondary_sub_description');
            $table->longText('secondary_description');
            $table->String('third_title');
            $table->longText('third_sub_description');
            $table->longText('third_description');
            $table->String('card_title');
            $table->longText('card_sub_description');
            $table->longText('card_description');
            $table->String('topic_card');
            $table->longText('description');
            $table->String('retreats');
            $table->longText('retreats_sub_description');
            $table->longText('retreats_description');
            $table->String('image');
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
        Schema::dropIfExists('about_courses');
    }
}
