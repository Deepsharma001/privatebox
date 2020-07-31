<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public $table = 'testimonials';

    protected $dates = [
        'updated_at',
        'created_at',
    ];

    protected $fillable = [
      'name',
      'title',
      'description',
      'image',
    ];
}
