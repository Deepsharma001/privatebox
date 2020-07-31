<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    public $table = 'institutions';

    protected $dates = [
        'updated_at',
        'created_at',
    ];

    protected $fillable = [
      'name'
    ];
}
