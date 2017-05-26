<?php

namespace App\Models;
use App\BaseModel;

class DeviceType extends BaseModel
{
    protected $table = 'device_types';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
