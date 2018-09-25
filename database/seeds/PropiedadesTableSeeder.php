<?php

use Illuminate\Database\Seeder;

class PropiedadesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */  
  public function run()
  {
    $json = File::get("database/seeds/json/propiedades.json");
      $data = json_decode($json);
      $fecha = \Carbon\Carbon::now()->toDateTimeString();
      foreach ($data as $obj) {
        DB::table('propiedades')->insert([
          'key' => $obj->key,
          'value' => $obj->value
        ]);
      }

      $fecha = \Carbon\Carbon::now()->toDateTimeString();
      DB::table('propiedades')
            ->update(['created_at' => $fecha, 'updated_at' => $fecha]);
  }

}
