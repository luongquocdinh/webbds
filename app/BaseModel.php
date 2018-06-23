<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'deleted_at' => 'timestamp',
    ];

    public function setCreatedAt($value)
    {
        $this->attributes['created_at'] = Carbon::now()->timestamp;

        return $this;
    }

    public function setUpdatedAt($value)
    {
        $this->attributes['updated_at'] = Carbon::now()->timestamp;

        return $this;
    }
}