<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'manufacturers';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'name', 'country', 'alphabet'
    ];

    public function products(){
        return $this->hasMany('App\Pesticides', 'manufacturersId');
    }
}