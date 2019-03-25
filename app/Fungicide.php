<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fungicide extends Model
{

    protected $table = 'a_fungicides';

    public $timestamps = false;


    protected $fillable = [
        'crop_id', 'product', 'productId', 'dose', 'doseId', 'note', 'afterNote', 'application',
        'minimumUse', 'disease', 'quarantine', 'category', 'practices', 'isActive'
    ];
}
