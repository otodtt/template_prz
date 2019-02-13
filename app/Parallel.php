<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parallel extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'aa_parallel';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'owner', 'product', 'substances', 'referenceProduct', 'manufacturer', 'validReferenceProduct',
        'parallelTrade', 'validParallelTrade', 'note', 'type', 'typeId', 'link', 'alphabet', 'isActive'
    ];
}
