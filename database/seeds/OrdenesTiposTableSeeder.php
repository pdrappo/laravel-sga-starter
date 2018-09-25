<?php

use Illuminate\Database\Seeder;

class OrdenesTiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ordenes_tipos')->insert([
        [
          'nombre' => 'Trabajo',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Reparación',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],

      ]);
    }
}
