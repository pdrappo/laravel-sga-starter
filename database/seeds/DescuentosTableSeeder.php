<?php

use Illuminate\Database\Seeder;

class DescuentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('descuentos')->insert([
        [
          'nombre' => 'Neto + IVA',
      		'valor' => 1,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => '5% DESC + IVA',
      		'valor' => 0.95,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => '10% DESC + IVA',
      		'valor' => 0.90,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => '15% DESC + IVA',
      		'valor' => 0.85,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => '20% DESC + IVA',
      		'valor' => 0.80,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => '25% DESC + IVA',
      		'valor' => 0.75,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => '30% DESC + IVA',
      		'valor' => 0.70,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]

      ]);
    }
}
