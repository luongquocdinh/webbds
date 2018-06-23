<?php

namespace App;

use App\BaseModel;

class Payment extends BaseModel
{
    protected $table = 'payment';

    protected $fillable = [
        'title', 'content', 'is_enable',
        'created_at', 'updated_at'
    ];
}
