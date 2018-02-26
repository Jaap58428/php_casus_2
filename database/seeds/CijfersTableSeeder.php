<?php

use Illuminate\Database\Seeder;

class CijfersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $cijfer_list = [
           ['cijfer' => 8.3, 'module_code' => 'IARCH', 'user_student_nummer' => 's1100592'],
           ['cijfer' => 7.3, 'module_code' => 'IWDR', 'user_student_nummer' => 's1100592'],
           ['cijfer' => 6.3, 'module_code' => 'IPMEDT2', 'user_student_nummer' => 's1100592'],
           ['cijfer' => 7.3, 'module_code' => 'IMTD1', 'user_student_nummer' => 's1100592'],
           ['cijfer' => 7.3, 'module_code' => 'IPMEDT3', 'user_student_nummer' => 's1100592'],
           ['cijfer' => 8.3, 'module_code' => 'IDEPA', 'user_student_nummer' => 's1100592'],
           ['cijfer' => 8.3, 'module_code' => 'ITREWA', 'user_student_nummer' => 's1100592'],
           ['cijfer' => 9.0, 'module_code' => 'IPROV', 'user_student_nummer' => 's1100592'],
           ['cijfer' => 8.3, 'module_code' => 'IARCH', 'user_student_nummer' => 's1100123'],
           ['cijfer' => 7.3, 'module_code' => 'IWDR', 'user_student_nummer' => 's1100123'],
           ['cijfer' => 6.3, 'module_code' => 'IPMEDT2', 'user_student_nummer' => 's1100123'],
           ['cijfer' => 3.3, 'module_code' => 'IMTD1', 'user_student_nummer' => 's1100123'],
           ['cijfer' => 4.3, 'module_code' => 'IPMEDT3', 'user_student_nummer' => 's1100123'],
           ['cijfer' => 8.3, 'module_code' => 'IKGEO', 'user_student_nummer' => 's1100123'],
           ['cijfer' => 5.3, 'module_code' => 'IHBO', 'user_student_nummer' => 's1100123'],
           ['cijfer' => 5.8, 'module_code' => 'IRDB', 'user_student_nummer' => 's1100123'],
          ];

         foreach ($cijfer_list as $cijfer) {
           DB::table('cijfers')->insert($cijfer);
         }
     }
 }
