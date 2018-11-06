<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Using the DB facade...
      DB::table('users')->insert([
          'name' => 'Chrisina',
          'email' => 'tina.wheezy@gmail.com',
          'password' => bcrypt('Mew4ever'),
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);

      // Using the user model...
      $user = new \App\User;
      $user->name = 'Casey';
      $user->email = "caseycorncobb@gmail.com";
      $user->password = bcrypt('Mew4ever');
      $user->save();

    }
}
