<?php

namespace App;

use App\BaseModel;

class Ground extends BaseModel
{
    protected $table = 'ground';

    protected $fillable = [
        'title', 'content', 'is_enable',
        'created_at', 'updated_at'
    ];
}
