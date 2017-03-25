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
    protected $fillable = ['link_id', 'name', 'full_name', 'text', 'group_id', 'culture_id'];
}
