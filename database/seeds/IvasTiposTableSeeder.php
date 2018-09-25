<?php

use Illuminate\Database\Seeder;

class IvasTiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ivas_tipos')->insert([
        [
          'nombre' => 'IVA 21%',
          'valor' => 21.00,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Exento',
          'valor' => 21.00,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]

      ]);
    }
}
