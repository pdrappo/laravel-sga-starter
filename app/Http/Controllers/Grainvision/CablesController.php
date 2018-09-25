<?php

namespace App\Http\Controllers\Grainvision;

use App\Http\Controllers\Controller;
use App\Models\Grainvision\Cable;

class CablesController extends Controller
{

     /**
      * Devuelve todos los cables de la planta
      * @param  integer $limit
      * @return Array
      */
     public function getAll($limit = 1000)
      {
          $cables = Cable::all()->take($limit);

          return response()->json([
              'status' => 'ok',
              'data' => $cables
          ], 200);

      }

      /**
       * Devuelve un cable indicando su id
       * @param  integer $id
       * @return Array
       */
      public function getById($id)
       {
           $cable = Cable::with('contenedor', 'sensores')->find($id);

           return response()->json([
               'status' => 'ok',
               'data' => $cable
           ], 200);
       }

       /**
        * Devuelve un cable indicando su tag
        * @param  string $tag
        * @return Array
        */
       public function getByTag($tag)
        {
            $cable = Cable::where('tag', $tag)->first();

            // $cable = Cable::with(array('contenedor'=>function($query){
            //     $query->select('id','tag');
            // }))->where('tag', $tag)->first();

            return response()->json([
                'status' => 'ok',
                'data' => $cable
            ], 200);

        }

}
