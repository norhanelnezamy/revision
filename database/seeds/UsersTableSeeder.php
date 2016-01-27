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
      /**
       * seeds one user into database.
     **/
      DB::table('users')->insert([
          'username' => str_random(10),
          'email' => str_random(10).'@gmail.com',
          'password' => bcrypt('secret'),
          'photo' => str_random(10),
      ]);

      /**
       * seeds multi record into database using factory.
     **/
      factory(App\User::class, 10)->create();


    }
}
