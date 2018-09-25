<?php

namespace App\Http\Controllers\Grainvision;

use App\Http\Controllers\Controller;
use App\Models\Grainvision\Contenedor;

class ContenedoresController extends Controller
{

     /**
      * Devuelve todos los contenedores de la planta
      * @param  integer $limit
      * @return Array
      */
     public function getAll($limit = 1000)
      {
          $contenedores = Contenedor::where(['parent_id' => null] )->with('child')->get()->take($limit);

          return response()->json([
              'status' => 'ok',
              'data' => $contenedores
          ], 200);

      }

      /**
       * Devuelve un contenedor indicando su id
       * @param  integer $id
       * @return Array
       */
      public function getById($id)
       {
           $contenedor = Contenedor::with('child')->find($id);

           return response()->json([
               'status' => 'ok',
               'data' => $contenedor
           ], 200);
       }

       /**
        * Devuelve un contenedor indicando su tag
        * @param  string $tag
        * @return Array
        */
       public function getByTag($tag)
        {
            $contenedor = Contenedor::with('child')->where('tag', $tag)->first();

            return response()->json([
                'status' => 'ok',
                'data' => $contenedor
            ], 200);

        }

}
