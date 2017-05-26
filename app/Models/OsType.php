<?php

namespace App\Models;
use App\BaseModel;

class OsType extends BaseModel
{
    protected $table = 'os_types';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
