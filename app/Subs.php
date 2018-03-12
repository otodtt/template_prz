<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subs extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'subs';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'name', 'idPest','firm' , 'firmId', 'alphabet', 'substance_id', 'typePest'
    ];


//    public function images(){
//        return $this->hasMany('App\Images');
//    }
}
