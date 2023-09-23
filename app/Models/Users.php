<?php
//models

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Users extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'users';
    protected $primaryKey  = 'id';


    //mutator-> here name or (per word) first letter set database uppercase;
    function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    //accessor-> here all letter uppercase when get data form database;

    function getNameAttribute($value){
        return strtoupper($value);
    }
}
