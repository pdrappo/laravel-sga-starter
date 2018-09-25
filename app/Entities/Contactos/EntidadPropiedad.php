<?php

namespace App\Entities\Contactos;

use Illuminate\Database\Eloquent\Model;

class EntidadPropiedad extends Model
{
    protected $table = 'entidades_propiedades';
    protected $with = ['propiedad'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entidad_id', 'propiedad_id', 'valor', 'tags'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['entidad_id', 'propiedad_id'];

    /**
     * Obtiene la propiedad a la cual pertenece
     */
    public function propiedad()
    {
      return $this->belongsTo('App\Entities\Sga\Propiedad', 'propiedad_id');
    }

}
