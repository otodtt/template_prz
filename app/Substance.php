<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Substance extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'substances';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'name', 'moreUses', 'alphabet'
    ];

//    public function products(){
//        return $this->hasMany('App\Subs');
//    }

    public function products(){
        return $this->hasMany('App\PestSubstance')->where('isActive', 0);
    }

    public function acaricides(){
        return $this->hasMany('App\PestSubstance')->where('pesticide_type', '=', 'acaricides')->where('isActive', 0);
    }

    public function nematocides(){
        return $this->hasMany('App\PestSubstance')->where('pesticide_type', '=', 'nematocides')->where('isActive', 0);
    }

    public function limatsides(){
        return $this->hasMany('App\PestSubstance')->where('pesticide_type', '=', 'limatsides')->where('isActive', 0);
    }


}
