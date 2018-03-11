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
        return $this->hasMany('App\Acaricide');
    }
}
