<?php

namespace App;

use App\BaseModel;

class Models extends BaseModel
{
    protected $table = 'models';

    protected $fillable = [
        'title', 'content', 'is_enable',
        'created_at', 'updated_at'
    ];
}
