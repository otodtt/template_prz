<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Limatsides extends Model
{
    protected $table = 'a_limatsides';

    public $timestamps = false;

    protected $fillable = [
        'crop_id', 'product', 'productId', 'dose', 'doseId', 'note', 'afterNote', 'application',
        'minimumUse', 'disease', 'quarantine', 'category', 'practices', 'isActive'
    ];
}
