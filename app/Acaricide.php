<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acaricide extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'a_acaricides';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'product', 'productId', 'dose', 'note', 'afterNote', 'minimumUse',
        'disease', 'quarantine', 'category', 'practices'
    ];
}
