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
//    protected $table = 'old_a_acaricides';
    protected $table = 'a_acaricides';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'crop_id', 'product', 'productId', 'dose', 'doseId', 'note', 'afterNote', 'application',
        'minimumUse', 'disease', 'quarantine', 'category', 'practices', 'isActive'
    ];
}
