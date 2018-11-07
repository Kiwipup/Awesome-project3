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
          'username'=> 'Mumfie',
          'email' => 'tina.wheezy@gmail.com',
          'password' => bcrypt('Mew4ever'),
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);

      // Using the user model...
      $user = new \App\User;
      $user->name = 'Casey';
      $user->username = 'caseycorncobb';
      $user->email = "caseycorncobb@gmail.com";
      $user->password = bcrypt('Mew4ever');
      $user->save();

      $user = new \App\User;
      $user->name = 'Kiwi';
      $user->username = 'Kiwipup';
      $user->email = "dog@dog.com";
      $user->password = bcrypt('Mew4ever');
      $user->save();

    }
}
