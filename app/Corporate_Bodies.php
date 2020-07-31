<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporate_Bodies extends Model
{
    public $table = 'corporate_bodies';

    protected $dates = [
        'updated_at',
        'created_at',
    ];

    protected $fillable = [
      'name'
    ];
}
