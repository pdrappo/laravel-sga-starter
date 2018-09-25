<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(IvasTiposTableSeeder::class);
        $this->call(TributosTiposTableSeeder::class);
        $this->call(MonedasTableSeeder::class);
        $this->call(OrdenesTiposTableSeeder::class);
        $this->call(FormasPagoTableSeeder::class);
        $this->call(EntregasTiposTableSeeder::class);
        $this->call(DocumentosTiposTableSeeder::class);
        $this->call(DescuentosTableSeeder::class);
        $this->call(PropiedadesTableSeeder::class);
        $this->call(PaisesTableSeeder::class);
        $this->call(ProvinciasTableSeeder::class);
        //$this->call(LocalidadesTableSeeder::class);
    }
}
