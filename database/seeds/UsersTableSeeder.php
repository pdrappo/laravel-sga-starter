<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'id' => 1,
          'name' => 'Pablo Drappo',
          'username' => 'pdrappo',
          'email' => 'pdrappo@iea.com.ar',
          'password' => bcrypt('Eva.4468'),
          'email_verified' => '1',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
    }
}
