<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About_courses extends Model
{
    public $table = 'about_courses';

    protected $dates = [
        'updated_at',
        'created_at',
    ];

    protected $fillable = [
        'main_title',
        'main_sub_description',
        'banner_image',
        'secondary_title',
        'secondary_sub_description',
        'secondary_description',
        'third_title',
        'third_sub_description',
        'third_description',
        'card_title',
        'card_sub_description',
        'card_description',
        'topic_card',
        'description',
        'retreats',
        'retreats_sub_description',
        'retreats_description',
        'image',
    ];
}
