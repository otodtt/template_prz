<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PestSubstance extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'pestsubstance';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'name', 'substanceId', 'quantity', 'quantityAfter'
    ];
}
