<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';

    /**
     * Защитени колони в таблицата
     * @var array
     */
    protected $fillable = [
        'imgPath', 'bgName', 'imgTitle', 'thumbPath', 'thumbAlt', 'thumbTitle'
    ];


    public function practices(){
        return $this->belongsTo('App\Practices', 'practices_id');
    }
}
