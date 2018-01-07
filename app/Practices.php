<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practices extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'practices';

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'groupId', 'cultureId', 'linkId', 'name', 'fullName', 'text', 'tablePiv',
    ];


    public function images(){
        return $this->hasMany('App\Images');
    }
}
