<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pheromones extends Model
{
    protected $table = 'a_pheromones';

    public $timestamps = false;

    protected $fillable = [
        'crop_id', 'product', 'productId', 'dose', 'doseId', 'note', 'afterNote', 'application',
        'minimumUse', 'disease', 'quarantine', 'category', 'practices', 'isActive'
    ];
}
