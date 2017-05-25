<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Conditions;
use App\BaseAbstractBean;
/**
 * Description of BaseCondition
 *
 * @author NTHanh
 */
class BaseCondition extends BaseAbstractBean
{
    public $limit;
    public $total_item;
    public $sort_type;
    public $keyword;
    public $code;
    
    
    public function getCode(){
        return $this->code;
    }

    public function getLimit()
    {
        return (int) env('APP_LIMIT', 20);
    }
    
    public function getTotalItem(){
        if(!is_null($this->total_item)){
            return $this->total_item;
        }
        return 0;
    }
    
    public function getSortType(){
        return "created_at";
    }
    public function getKeyword()
    {
        return trim($this->keyword);
    }
}