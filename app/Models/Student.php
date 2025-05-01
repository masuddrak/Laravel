<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    function getNameAttribute($val){
        return ucfirst($val);
    }
    function getPhoneAttribute($val){
        return "+880"." ".$val;
    }
    function setNameAttribute($val){
        $this->attributes['name']=ucfirst($val);
    }
}
