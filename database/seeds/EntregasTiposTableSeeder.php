<?php

use Illuminate\Database\Seeder;

class EntregasTiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('entregas_tipos')->insert([
        [
          'nombre' => 'Retiran',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Comisionista',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Transporte a deposito',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Transporte a domicilio',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Transporte a domicilio (Pago en destino)',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Transporte a deposito (Pago en destino)',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Correo a Sucursal',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Correo a Domicilio',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Correo a Sucursal (Pago en destino)',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Correo a Domicilio (Pago en destino)',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Aéreo',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]

      ]);
    }
}
