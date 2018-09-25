<?php

use Illuminate\Database\Seeder;

class LocalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/seeds/json/localidades.json");
        $data = json_decode($json);
        $fecha = \Carbon\Carbon::now()->toDateTimeString();
        foreach ($data as $obj) {
          DB::table('localidades')->insert([
            'id' => $obj->id,
            'nombre' => $obj->nombre,
            'codigo_postal' => $obj->codigo_postal,
            'provincia_id' => $obj->provincia_id,
            'created_at' => $fecha
          ]);
        }
    }
}
