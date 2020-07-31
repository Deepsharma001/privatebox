<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About_sunandaji extends Model
{
    public $table = 'about_sunandaji';


    protected $dates = [
        'updated_at',
        'created_at',
    ];

    protected $fillable = [
      'main_title',
      'main_description',
      'banner_image',
      'secondary_title',
      'secondary_sub_description',
      'secondary_description',
      'about_image',
      'link_1',
      'link_2',
      'link_3',
      'link_4',
  
    ];
}
