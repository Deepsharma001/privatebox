<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About_swamiji extends Model
{
    public $table = 'about_swamiji';

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
        'image',
        'image_1',
        'side_image',
        'description',
        'card_title',
        'card_description',
        'author_title',
        'author_sub_description',
        'author_description',
        'author_image',
        'academic_title',
        'academic_sub_description',
        'academic_description',
        'academic_image',
        'corporate_guru_title',
        'corporate_guru_image',
        'corporate_guru_sub_description',
        'corporate_guru_description',
        'footer_title',
        'footer_description',
        'link_1',
        'link_2',
        'link_3',
        'link_4',
    ];
    
}
