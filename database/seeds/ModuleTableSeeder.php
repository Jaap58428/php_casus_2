<?php

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $modules = [
           ['code' => 'IARCH', 'beschrijving' => 'IT Architectuur', 'coordinator' => 'J. Rijsdijk'],
           ['code' => 'IIBPM', 'beschrijving' => 'Informatie Management', 'coordinator' => 'K.J. Mollema'],
           ['code' => 'IHBO', 'beschrijving' => 'HBO-I vaardigheden', 'coordinator' => 'J. Walls'],
           ['code' => 'IOPR1', 'beschrijving' => 'OOP Java 1', 'coordinator' => 'K. Warner'],
           ['code' => 'IOPR2', 'beschrijving' => 'OOP Java 2', 'coordinator' => 'K. Warner'],
           ['code' => 'IWDR', 'beschrijving' => 'Webdesign en realisatie', 'coordinator' => 'R. Winkel'],
           ['code' => 'IMTD1', 'beschrijving' => 'Media design', 'coordinator' => 'R. Winkel'],
           ['code' => 'IRDB', 'beschrijving' => 'Relationele Databases', 'coordinator' => 'R. Westveer'],
           ['code' => 'INET', 'beschrijving' => 'Netwerk structuren', 'coordinator' => 'E. Wessel'],
           ['code' => 'IPROV', 'beschrijving' => 'Projectvaardigheden', 'coordinator' => 'R. Meisner'],
           ['code' => 'ITREWA', 'beschrijving' => 'Trendwatching', 'coordinator' => 'A. Tolba'],
           ['code' => 'IDEPA', 'beschrijving' => 'Design Patterns', 'coordinator' => 'A. Maanen'],
           ['code' => 'IKGEO', 'beschrijving' => 'Geolocaties', 'coordinator' => 'K.J. Mollema'],
           ['code' => 'IPMEDT2', 'beschrijving' => 'Media Project #1', 'coordinator' => 'R. Winkel'],
           ['code' => 'IPMEDT3', 'beschrijving' => 'Media Project #2', 'coordinator' => 'J. Rijsdijk'],
         ];

         foreach ($modules as $module) {
           DB::table('module')->insert($module);
         }
     }
 }
