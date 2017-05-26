<?php

namespace App\Models;
use App\BaseModel;

class Department extends BaseModel
{
    protected $table = 'departments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'short_name',
        'description',
        'director_manager_id'
    ];
}
