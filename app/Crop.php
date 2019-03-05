<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'crops';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'group_id', 'name', 'latin_name', 'cropDescription'
    ];

    public function acaricides(){
        return $this->hasMany('App\Acaricide')->where('isActive', '=', 0);
    }

    public function nematocides(){
        return $this->hasMany('App\Nematocides')->where('isActive', '=', 0);
    }

    public function limatsides(){
        return $this->hasMany('App\Limatsides')->where('isActive', '=', 0);
    }

    public function pheromones(){
        return $this->hasMany('App\Pheromones')->where('isActive', '=', 0);
    }
}
