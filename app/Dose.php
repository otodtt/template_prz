<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dose extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'doses';

    public $timestamps = false;

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'dose', 'secondDose', 'note', 'afterNote','crop', 'disease', 'quarantine',
        'measure', 'measureId', 'application', 'doseNote', 'isActive'
    ];
}
