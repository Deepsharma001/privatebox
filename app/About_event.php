<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About_event extends Model
{
    public $table = 'about_event';

    protected $dates = [
        'updated_at',
        'created_at',
    ];

    protected $fillable = [
        'main_title',
        'main_description',
        'banner_image',
        'link_1',
        'link_2',
        'link_3',
        'link_4',
    ];
}
