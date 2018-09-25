<?php

namespace App\Http\Controllers\Contactos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entities\Contactos\Entidad;
use App\Entities\Contactos\EntidadPropiedad;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EntidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $limit = 20;
        $contactos = Entidad::all()->take($limit);

        return response()->json([
            'status' => 'ok',
            'data' => $contactos
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $body = $request->input();

        $entidad = new Entidad();
        
        DB::beginTransaction(); //Start transaction!

        try{

            $entidad->nombre = $body['nombre'];
            $entidad->nombre_alternativo = $body['nombre_alternativo'];
            $entidad->active = $body['active'];
            $entidad->observaciones = $body['observaciones'];
            $entidad->updated_at = new Carbon();
            $entidad->save();

            $propiedades = [];
            $propiedades_cantidad = count($body['propiedades']);
            
            if($propiedades_cantidad > 0){
                for ($i=0; $i < $propiedades_cantidad; $i++) { 
                    $propiedades[] = new EntidadPropiedad([
                        'entidad_id' => $entidad->id,
                        'propiedad_id' => $body['propiedades'][$i]['propiedad_id'],
                        'valor' => $body['propiedades'][$i]['valor'],
                        'tags' => array_key_exists('tags', $body['propiedades'][$i]) ? $body['propiedades'][$i]['tags'] : null
                    ]);
                }
                $entidad->propiedades()->saveMany($propiedades);
            }
            
        }
        catch(\Exception $e)
        {
            //failed logic here
            DB::rollback();
            throw $e;
        }

        DB::commit();

        return response()->json([
            'status' => 'ok',
            'data' => $entidad,
            "message" => __('entities.updated', ['id' => $entidad->id])
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $entidad = Entidad::find($id);

        if(!$entidad){
            return response()->json([
                'status' => 'error',
                "message" => __('entities.unknown', ['id' => $id])
            ], 200);
        }
        
        return response()->json([
            'status' => 'ok',
            'data' => $entidad
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $body = $request->input();

        

        DB::beginTransaction(); //Start transaction!

        try{

            $entidad = Entidad::find($id);
            if(!$entidad){
                return response()->json([
                    'status' => 'error',
                    "message" => __('entities.unknown', ['id' => $id])
                ], 200);
            }
            
            $entidad->nombre = $body['nombre'];
            $entidad->nombre_alternativo = $body['nombre_alternativo'];
            $entidad->active = $body['active'];
            $entidad->observaciones = $body['observaciones'];
            $entidad->updated_at = new Carbon();
            $entidad->save();

            $propiedades = [];
            $propiedades_cantidad = count($body['propiedades']);
            
            if($propiedades_cantidad > 0){
                $entidad->propiedades()->delete();
                for ($i=0; $i < $propiedades_cantidad; $i++) { 
                    $propiedades[] = new EntidadPropiedad([
                        'entidad_id' => $entidad->id,
                        'propiedad_id' => $body['propiedades'][$i]['propiedad_id'],
                        'valor' => $body['propiedades'][$i]['valor'],
                        'tags' => array_key_exists('tags', $body['propiedades'][$i]) ? $body['propiedades'][$i]['tags'] : null
                    ]);
                }
                $entidad->propiedades()->saveMany($propiedades);
            }
            
        }
        catch(\Exception $e)
        {
            //failed logic here
            DB::rollback();
            throw $e;
        }

        DB::commit();

        $entidad = Entidad::find($id);
        return response()->json([
            'status' => 'ok',
            'data' => $entidad,
            "message" => __('entities.updated', ['id' => $id])
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        $entidad = Entidad::find($id);
        if($entidad){

            $entidad->delete();
            return response()->json([
                'status' => 'ok',
                "message" => __('entities.deleted', ['id' => $id])
            ], 200);

        }
       
        return response()->json([
            'status' => 'error',
            "message" => __('entities.unknown', ['id' => $id])
        ], 200);
        
        
    }
}
