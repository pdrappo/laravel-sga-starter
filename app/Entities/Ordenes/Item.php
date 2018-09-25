<?php

namespace App\Entities\Ordenes;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'ordenes_items';
    protected $with = [];

}
