<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutSwamijiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_swamiji', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('main_title');
            $table->longText('main_sub_description');
            $table->longText('main_description');
            $table->String('banner_image');
            $table->String('secondary_title');
            $table->longText('secondary_sub_description');
            $table->longText('secondary_description');
            $table->String('image');
            $table->String('image_1');
            $table->String('side_image');
            $table->longText('description');
            $table->String('card_title');
            $table->longText('card_description');
            $table->String('author_title');
            $table->longText('author_sub_description');
            $table->longText('author_description');
            $table->String('author_image');
            $table->String('academic_title');
            $table->longText('academic_sub_description');
            $table->longText('academic_description');
            $table->String('academic_image');
            $table->String('corporate_guru_title');
            $table->longText('corporate_guru_sub_description');
            $table->longText('corporate_guru_description');
            $table->longText('footer_title');
            $table->longText('footer_description');
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
        Schema::dropIfExists('about_swamiji');
    }
}
