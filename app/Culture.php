<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    /**
     * Защитена таблица
     *
     * @var string
     */
    protected $table = 'cultures';

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = ['group_id', 'name', 'latin_name'];
}
