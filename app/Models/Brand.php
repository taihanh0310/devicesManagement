<?php

namespace App\Models;
use App\BaseModel;

class Brand extends BaseModel
{
    protected $table = 'brands';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'country_name'
    ];
}
