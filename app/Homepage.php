<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    public $table = 'homepage';


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
      'secondary_link',
      'third_title',
      'third_description',
      'third_link',
      'secondary_description',
      'secondary_description',
      'secondary_description',
    ];
}