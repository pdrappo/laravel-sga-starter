<?php

use Illuminate\Database\Seeder;

class TributosTiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $json = File::get("database/seeds/json/tributos_tipos.json");
      $data = json_decode($json);
      $fecha = \Carbon\Carbon::now()->toDateTimeString();
      foreach ($data as $obj) {
        DB::table('tributos_tipos')->insert([
          'id' => $obj->id,
          'nombre' => $obj->nombre,
          'iva_tipo_id' => $obj->iva_tipo_id,
          'created_at' => $fecha
        ]);
      }
    }
}
