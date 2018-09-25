<?php

namespace App\Http\Controllers\Grainvision;

use App\Http\Controllers\Controller;
use App\Models\Grainvision\Contenedor;

class EstructurasController extends Controller
{

     /**
      * Devuelve todos la estructura de la planta
      * @param  integer $limit
      * @return Array
      */
     public function index($limit = 1000)
      {
          // $now = \Carbon\Carbon::now();
          $now = '2018-01-17 05:31:28';
          $from = \Carbon\Carbon::parse($now)->subHours(2);
          $to = \Carbon\Carbon::parse($now)->addHours(2);
          $silos = [];
          $celdas = Contenedor::where(['parent_id' => null, 'contenedor_tipo_id' => 2])
          ->with(['child' => function($query){
          
          }, 'child.cables' => function(){
          
            // Traigo la cantidad de sensores para poder contarlos y armar las tablas
            // para el compoenente CabriadaTable.vue
          }, 'child.cables.sensores' => function(){

          }])->get();

          // $celdas = Contenedor::where(['parent_id' => null, 'contenedor_tipo_id' => 2])
          // ->with(['child' => function($query){

          // }, 'child.cables' => function(){

          // }, 'child.cables.sensores' => function(){

          // }, 'child.cables.sensores.historicos' => function($query) use( $from, $now){
          //   $query->where('fecha_hora','>=', $from);
          //   $query->where('fecha_hora','<=', $now);
          // }, 'child.cables.sensores.historicos.temperatura' => function(){

          // }, 'child.cables.sensores.historicos.resistencia' => function(){

          // }, 'child.cables.sensores.historicos.estado' => function(){

          // }])
          // ->get();

          // $silos = Contenedor::where(['parent_id' => null, 'contenedor_tipo_id' => 1])

          // ->with(['cables' => function($query){

          // }, 'cables.sensores' => function(){

          // }, 'cables.sensores.historicos' => function($query) use( $from, $to){
          //   $query->where('fecha_hora','>=', $from);
          //   $query->where('fecha_hora','<=', $to);
          // }, 'cables.sensores.historicos.temperatura' => function(){

          // }, 'cables.sensores.historicos.resistencia' => function(){

          // }, 'cables.sensores.historicos.estado' => function(){

          // }])
          // ->get();

          $silos = Contenedor::where(['parent_id' => null, 'contenedor_tipo_id' => 1])

          ->with(['cables' => function($query){}]);

          return response()->json([
              'status' => 'ok',
              'data' => array('celdas' => $celdas, 'silos' => $silos)
          ], 200);

      }

}
