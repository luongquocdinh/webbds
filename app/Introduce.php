<?php

namespace App;

use App\BaseModel;

class Introduce extends BaseModel
{
    protected $table = 'introduce';

    protected $fillable = [
        'title', 'content', 'is_enable',
        'created_at', 'updated_at'
    ];
}
