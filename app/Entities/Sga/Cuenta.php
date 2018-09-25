<?php

namespace App\Entities\Sga;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = 'cuentas';
    protected $with = [];

    /**
     * Obtiene el contenedor asociado al cable
     */
    public function entidad()
    {
        return $this->belongsTo('App\Entities\Sga\EntidadTributaria', 'entidad_tributaria_id');
    }

    /**
     * Obtiene los sensores que le perteneces
     */
    public function direccion()
    {
        return $this->hasOne('App\Entities\Localizacion\Direccion', 'direccion_id');
    }

}
