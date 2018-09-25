<?php

use Illuminate\Database\Seeder;

class DocumentosTiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('documentos_tipos')->insert([
        [
          'nombre' => 'CUIT',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'DNI',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],

      ]);
    }
}
