<?php

use Illuminate\Database\Seeder;

class PaisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      // $json = File::get("database/seeds/json/paises.json");
      // $data = json_decode($json);
      // var_dump($data);
      // $array = array();
      // foreach ($data->paises as $obj) {
      //   $array[] = [
      //     'nombre' => $obj->nombre,
      //     'created_at' => \Carbon\Carbon::now()->toDateTimeString()
      //   ];
      //   print($obj->nombre);
      // }

      DB::table('paises')->insert([

      	[
      		"id" => 1,
      		"nombre" => "Argentina",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 2,
      		"nombre" => "Brasil",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 3,
      		"nombre" => "EE.UU",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 4,
      		"nombre" => "Egipto",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 5,
      		"nombre" => "Paraguay",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 6,
      		"nombre" => "Uruguay",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 7,
      		"nombre" => "Venezuela",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 8,
      		"nombre" => "Desconocido",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 9,
      		"nombre" => "Japón",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 10,
      		"nombre" => "Mexico",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 11,
      		"nombre" => "Chile",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 12,
      		"nombre" => "Nicaragua",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 13,
      		"nombre" => "China",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 14,
      		"nombre" => "Bolivia",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	],
      	[
      		"id" => 15,
      		"nombre" => "Ecuador",
          "created_at" => \Carbon\Carbon::now()->toDateTimeString()
      	]

      ]);

      // DB::table('users')->delete();
      // $json = File::get("database/data/users.json");
      // $data = json_decode($json);
      // foreach ($data as $obj) {
      //   User::create(array(
      //     'id' => $obj->id,
      //     'email' => $obj->email,
      //     'first_name' => $obj->first_name,
      //     'last_name' => $obj->last_name,
      //     'password' => $obj->password
      //   ));
      // }
    }
}
