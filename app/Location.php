<?php

namespace App;

use App\BaseModel;

class Location extends BaseModel
{
    protected $table = 'location';

    protected $fillable = [
        'title', 'content', 'is_enable',
        'created_at', 'updated_at'
    ];
}
