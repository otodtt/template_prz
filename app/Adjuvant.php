<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adjuvant extends Model
{
    protected $table = 'aa_adjuvants';

    public $timestamps = false;


    protected $fillable = [
        'name', 'orderAdjuvant', 'owner', 'type', 'action',  'crops', 'dose',  'application', 'alphabet', 'isActive'
    ];
}
