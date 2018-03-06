<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesticides extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'pesticides';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'moreNames', 'secondName','manufacturersId', 'firmName', 'permission',
        'valid', 'dateOrder', 'period', 'substance', 'lethal', 'category', 'alphabet', 'pesticide',
        'pesticideId'
    ];
}
