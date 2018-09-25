<?php

namespace App\Http\Controllers\Grainvision;

use App\Http\Controllers\Controller;

use App\Models\Grainvision\Sensor;

class SensoresController extends Controller
{

     /**
      * Devuelve todos los cables de la planta
      * @param  integer $limit
      * @return Array
      */
     public function getAll($limit = 1000)
      {
          $sensores = Sensor::all()->take($limit);

          return response()->json([
              'status' => 'ok',
              'data' => $sensores
          ], 200);

      }

      /**
       * Devuelve un sensor indicando su id
       * @param  integer $id
       * @return Array
       */
      public function getById($id)
       {
           $sensor = Sensor::with('cable')->find($id);

           return response()->json([
               'status' => 'ok',
               'data' => $sensor
           ], 200);
       }

       /**
        * Devuelve un sensor indicando su tag
        * @param  string $tag
        * @return Array
        */
       public function getByTag($tag)
        {
            $sensor = Sensor::where('tag', $tag)->first();

            // $cable = Cable::with(array('contenedor'=>function($query){
            //     $query->select('id','tag');
            // }))->where('tag', $tag)->first();

            return response()->json([
                'status' => 'ok',
                'data' => $sensor
            ], 200);

        }

}
