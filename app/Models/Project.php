<?php

namespace App\Models;
use App\BaseModel;

class Project extends BaseModel
{
    protected $table = 'projects';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
