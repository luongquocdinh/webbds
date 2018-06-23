<?php

namespace App;

use App\BaseModel;

class Progress extends BaseModel
{
    protected $table = 'progress';

    protected $fillable = [
        'title', 'content', 'is_enable',
        'created_at', 'updated_at'
    ];
}
