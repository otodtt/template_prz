<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acaricides extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'acaricides';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'moreNames', 'secondName','manufacturersId', 'firmName', 'permission',
        'valid', 'dateOrder', 'period', 'substance', 'lethal', 'category', 'alphabet',
    ];
}
