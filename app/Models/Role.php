<?php

namespace App\Models;
use App\BaseModel;

class Role extends BaseModel
{
    protected $table = 'roles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
