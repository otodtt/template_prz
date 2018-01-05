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
    protected $fillable = ['linkId', 'name', 'fullName', 'text', 'groupId', 'cultureId', 'imgPath', 'tablePiv'];
}
