<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
	/**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    /**
     * Query scope
     */
    public function scopeSortUpdated($query) {
        return $query->orderBy('updated_at', 'desc');
    }

    /**
     * @todo Sap xep theo column nao do
     * @param type $query
     * @param type $attribute
     * @param type $order
     * @return type
     */
    public function scopeSortType($query, $attribute = "updated_at", $order = "desc") {
        return $query->orderBy($attribute, $order);
    }

    /**
     * 
     * @param type $query
     * @param type $attribute
     * @param type $type
     * @return type
     */
    public function scopeGetType($query, $attribute, $type) {
        return $query->where($attribute, $type);
    }

    public function scopeSearchLike($query, $attribute = 'name', $value) {
        return $query->where($attribute, 'LIKE', "%$value%");
    }

    /**
     * End query scope
     */
}
