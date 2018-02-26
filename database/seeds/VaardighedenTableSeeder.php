<?php

use Illuminate\Database\Seeder;

class VaardighedenTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
     $vaardigheden_list = [
       ['module_code' => 'IARCH', 'beschrijving' => 'Hardware'],
       ['module_code' => 'IARCH', 'beschrijving' => 'Binair Rekenen'],
       ['module_code' => 'IARCH', 'beschrijving' => 'Turing Machines'],
       ['module_code' => 'IWDR', 'beschrijving' => 'HTML'],
       ['module_code' => 'IWDR', 'beschrijving' => 'CSS'],
       ['module_code' => 'IPMEDT2', 'beschrijving' => 'JavaScript'],
       ['module_code' => 'IPMEDT2', 'beschrijving' => 'Storytelling'],
       ['module_code' => 'IPMEDT3', 'beschrijving' => 'WebVR'],
       ['module_code' => 'IPMEDT3', 'beschrijving' => 'Leren leren'],
       ['module_code' => 'IDEPA', 'beschrijving' => 'Design patters'],
       ['module_code' => 'IDEPA', 'beschrijving' => 'Refactoring'],
       ['module_code' => 'IKGEO', 'beschrijving' => 'Big data'],
       ['module_code' => 'IKGEO', 'beschrijving' => 'Geolocaties'],
       ['module_code' => 'IMTD1', 'beschrijving' => 'Typografie'],
       ['module_code' => 'IMTD1', 'beschrijving' => 'Vormgeving'],
       ['module_code' => 'ITREWA', 'beschrijving' => 'Trends'],
       ['module_code' => 'ITREWA', 'beschrijving' => 'Verslaglegging'],
       ['module_code' => 'IPROV', 'beschrijving' => 'Projectvaardigheden'],
       ['module_code' => 'IPROV', 'beschrijving' => 'Samenwerken'],
       ['module_code' => 'IPROV', 'beschrijving' => 'Verslaglegging'],
       ['module_code' => 'IHBO', 'beschrijving' => 'Professionaliteit'],
       ['module_code' => 'IHBO', 'beschrijving' => 'Ambitie'],
       ['module_code' => 'IRDB', 'beschrijving' => 'SQL'],
       ['module_code' => 'IRDB', 'beschrijving' => 'Back End'],
     ];

     foreach ($vaardigheden_list as $vaardigheid) {
       DB::table('vaardigheden')->insert($vaardigheid);
     }
   }
}
