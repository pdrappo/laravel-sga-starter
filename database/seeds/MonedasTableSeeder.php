<?php

use Illuminate\Database\Seeder;

class MonedasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('monedas')->insert([
        [
          'nombre' => 'Dolar',
          'iso' => 'USD',
          'simbolo' => 'U$D',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Pesos Argentinos',
          'iso' => 'ARS',
          'simbolo' => '$',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]

      ]);
    }
}
