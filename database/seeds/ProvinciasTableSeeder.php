<?php

use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('provincias')->insert([
        [
          "pais_id" => 1,
          "id" => 1,
          "nombre" => "Santa Fe",
          "iso" => "SF"
        ],
        [
          "pais_id" => 1,
          "id" => 2,
          "nombre" => "Buenos Aires",
          "iso" => "BA"
        ],
        [
          "pais_id" => 1,
          "id" => 3,
          "nombre" => "Córdoba",
          "iso" => "CO"
        ],
        [
          "pais_id" => 1,
          "id" => 4,
          "nombre" => "San Luis",
          "iso" => "SL"
        ],
        [
          "pais_id" => 1,
          "id" => 5,
          "nombre" => "San Juan",
          "iso" => "SJ"
        ],
        [
          "pais_id" => 1,
          "id" => 6,
          "nombre" => "Tucuman",
          "iso" => "TU"
        ],
        [
          "pais_id" => 1,
          "id" => 7,
          "nombre" => "Tierra del Fuego",
          "iso" => "TF"
        ],
        [
          "pais_id" => 1,
          "id" => 8,
          "nombre" => "Entre Ríos",
          "iso" => "ER"
        ],
        [
          "pais_id" => 1,
          "id" => 9,
          "nombre" => "Jujuy",
          "iso" => "JU"
        ],
        [
          "pais_id" => 1,
          "id" => 10,
          "nombre" => "Salta",
          "iso" => "SA"
        ],
        [
          "pais_id" => 1,
          "id" => 11,
          "nombre" => "La Rioja",
          "iso" => "LR"
        ],
        [
          "pais_id" => 1,
          "id" => 12,
          "nombre" => "Catamarca",
          "iso" => "CA"
        ],
        [
          "pais_id" => 1,
          "id" => 13,
          "nombre" => "Chaco",
          "iso" => "CH"
        ],
        [
          "pais_id" => 1,
          "id" => 14,
          "nombre" => "Formosa",
          "iso" => "FO"
        ],
        [
          "pais_id" => 1,
          "id" => 15,
          "nombre" => "La Pampa",
          "iso" => "LP"
        ],
        [
          "pais_id" => 1,
          "id" => 16,
          "nombre" => "Antártida",
          "iso" => "AN"
        ],
        [
          "pais_id" => 1,
          "id" => 17,
          "nombre" => "Neuquén",
          "iso" => "NE"
        ],
        [
          "pais_id" => 1,
          "id" => 18,
          "nombre" => "Río Negro",
          "iso" => "RN"
        ],
        [
          "pais_id" => 1,
          "id" => 19,
          "nombre" => "Mendoza",
          "iso" => "ME"
        ],
        [
          "pais_id" => 1,
          "id" => 20,
          "nombre" => "Capital Federal",
          "iso" => "CF"
        ],
        [
          "pais_id" => 1,
          "id" => 21,
          "nombre" => "Chubut",
          "iso" => "CT"
        ],
        [
          "pais_id" => 1,
          "id" => 22,
          "nombre" => "Santa Cruz",
          "iso" => "SC"
        ],
        [
          "pais_id" => 1,
          "id" => 23,
          "nombre" => "Corrientes",
          "iso" => "CO"
        ],
        [
          "pais_id" => 1,
          "id" => 24,
          "nombre" => "Misiones",
          "iso" => "MI"
        ],
        [
          "pais_id" => 1,
          "id" => 25,
          "nombre" => "Santiago del Estero",
          "iso" => "SE"
        ],
        [
          "pais_id" => 1,
          "id" => 26,
          "nombre" => "Desconocida",
          "iso" => "DE"
        ],
        [
          "pais_id" => 5,
          "id" => 47,
          "nombre" => "Alto Paraná",
          "iso" => null
        ],
        [
          "pais_id" => 12,
          "id" => 48,
          "nombre" => "Managua",
          "iso" => "MN"
        ],
        [
          "pais_id" => 14,
          "id" => 49,
          "nombre" => "Andrés Ibáñez",
          "iso" => null
        ]

      ]);
      DB::table('provincias')
            ->update(['created_at' => \Carbon\Carbon::now()->toDateTimeString()]);
    }
}
