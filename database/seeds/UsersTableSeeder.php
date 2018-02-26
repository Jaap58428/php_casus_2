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
     $user_list = [
       ['name' => 'Jaap Kanbier', 'student_nummer' => 's1100592', 'email' => 'jaapkanbier@hotmail.com', 'password' => bcrypt('qwerty123')],
       ['name' => 'John Doe', 'student_nummer' => 's1100123', 'email' => 'somebody@hotmail.com', 'password' => bcrypt('secret123')],
       ['name' => 'D. Ocent', 'email' => 'belangrijk@hotmail.com', 'password' => bcrypt('wachtwoord123'), 'is_admin' => true],
     ];

     foreach ($user_list as $user) {
       DB::table('users')->insert($user);
     }
   }
}
