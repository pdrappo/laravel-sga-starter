<?php

namespace App\Http\Controllers\Grainvision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Grainvision\Contenedor;
use App\Models\Grainvision\Cable;
use App\Models\Grainvision\Sensor;
use App\Models\Grainvision\HistoricoSensor;
use App\Models\Grainvision\HistoricoSensorEstado;
use App\Models\Grainvision\HistoricoSensorResistencia;
use App\Models\Grainvision\HistoricoSensorTemperatura;

class HistoricosController extends Controller
{

     /**
      * Devuelve el historial de un cable entre 2 fechas
      * @param  String  $tag
      * @param  Request $request
      * @param  Cable   $cable
      * @return JSON
      */
     public function getCableFilter($tag, Request $request, Cable $cable)
      { 
          //$roles = App\User::find(1)->roles()->orderBy('name')->get();

          // Search for a user based on their name.
          if (!$request->has('desde') || !$request->has('hasta')) {
            return response()->json([
                'status' => 'error',
                'msg' => "Debe indicar los parametros desde y hasta"
            ], 402);
          }

          // Continue for all of the filters.

          // Get the results and return them.
          $cable = $cable->newQuery();
          $from = \Carbon\Carbon::parse($request->input('desde'));
          $to = \Carbon\Carbon::parse($request->input('hasta'));

          $result = $cable->where('tag', $tag)
          ->with(['sensores' => function($query){

          }, 'sensores.historicos' => function($query) use( $from, $to){
            $query->where('fecha_hora','>=', $from);
            $query->where('fecha_hora','<=', $to);
          }, 'sensores.historicos.temperatura' => function(){

          }, 'sensores.historicos.resistencia' => function(){

          }, 'sensores.historicos.estado' => function(){

          }])
          ->first();

          return response()->json([
              'status' => 'ok',
              'data' => $result
          ], 200);

      }

      public function getContenedorFilter($tag, Request $request, Contenedor $contenedor)
       {

           // Search for a user based on their name.
           if (!$request->has('desde') || !$request->has('hasta')) {
             return response()->json([
                 'status' => 'error',
                 'msg' => "Debe indicar los parametros desde y hasta"
             ], 200);
           }

           // Continue for all of the filters.

           // Get the results and return them.
           $contenedor = $contenedor->newQuery();
           $from = \Carbon\Carbon::parse($request->input('desde'));
           $to = \Carbon\Carbon::parse($request->input('hasta'));

           $result = $contenedor->where('tag', $tag)
           ->with(['cables' => function($query){

           }, 'cables.sensores' => function($query){

           }, 'cables.sensores.historicos' => function($query) use( $from, $to){
             $query->where('fecha_hora','>=', $from);
             $query->where('fecha_hora','<=', $to);
           }, 'cables.sensores.historicos.temperatura' => function(){

           }, 'cables.sensores.historicos.resistencia' => function(){

           }, 'cables.sensores.historicos.estado' => function(){

           }])
           ->get();

           return response()->json([
               'status' => 'ok',
               'data' => $result
           ], 200);

       }

      /**
       * Devuelve un historico indicando su id
       * @param  integer $id
       * @return Array
       */
      public function getById($id)
       {
           $historico = HistoricoSensor::with('sensor', 'temperatura', 'resistencia', 'estado')->find($id);

           return response()->json([
               'status' => 'ok',
               'data' => $historico
           ], 200);
       }

       /**
        * Devuelve un cable indicando su tag
        * @param  string $tag
        * @return Array
        */
       public function getByTag($tag)
        {
            $historico = HistoricoSensor::where('tag', $tag)->first();

            // $cable = Cable::with(array('contenedor'=>function($query){
            //     $query->select('id','tag');
            // }))->where('tag', $tag)->first();

            return response()->json([
                'status' => 'ok',
                'data' => $cable
            ], 200);

        }

}
