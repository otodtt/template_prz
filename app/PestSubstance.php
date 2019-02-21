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
        'name', 'substance_id', 'quantity', 'quantityAfter', 'pesticide_name', 'pesticide_type',
        'manufacturersId', 'firmName', 'isActive'
    ];
}
