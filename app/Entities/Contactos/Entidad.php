<?php

namespace App\Entities\Contactos;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = 'entidades';
    protected $with = ['propiedades'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'nombre_alternativo', 'activo', 'observaciones'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];


    /**
     * Obtiene las propiedades de la entidad
     */
    public function propiedades()
    {
      return $this->hasMany('App\Entities\Contactos\EntidadPropiedad', 'entidad_id');
    }

}
