<?php

use Illuminate\Database\Seeder;

class FormasPagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('formas_pago')->insert([
        [
          'nombre' => 'Contado',
          'vencimiento' => 0,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Anticipado Transferencia Bancaria',
          'vencimiento' => 0,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => '15 Días F.F',
          'vencimiento' => 15,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => '30 Días F.F.',
          'vencimiento' => 30,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Cheque a 15 Días',
          'vencimiento' => 15,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Cheque a 30 Días',
          'vencimiento' => 30,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'MercadoPago',
          'vencimiento' => 0,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => 'Cuenta Corriente',
          'vencimiento' => 30,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => '60 Días F.F.',
          'vencimiento' => 60,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ],
        [
          'nombre' => '45 Días F.F.',
          'vencimiento' => 45,
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]

      ]);

    }
}
