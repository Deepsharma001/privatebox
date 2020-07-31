<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About_vedanta extends Model
{
    public $table = 'about_vedanta';


    protected $dates = [
        'updated_at',
        'created_at',
    ];

    protected $fillable = [
      'main_title',
      'main_sub_description',
      'main_description',
      'banner_image',
      'secondary_title',
      'secondary_sub_description',
      'secondary_description',
      'card_title',
      'card_description',
      'third_title',
      'third_sub_description',
      'third_description',
      
    ];
}