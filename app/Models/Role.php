<?php

namespace App\Models;
use App\BaseModel;
use App\User;

class Role extends BaseModel
{
    protected $table = 'roles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'created_by'
    ];
    
    /**
     * Relationship
     * 
     */
    public function users(){
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
