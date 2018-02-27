<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function overview()
    {
      // get all needed data here
      // $modules => App\Cijfer::all()->user()->get();
      // $user_name -> {{ Auth::user()->name }};

      $data = array(
        'user_name' => 'GETUSERNAME',
        'modules' => ['vak1', 'vak2']
      );
      return view('student.overview')->with($data);
    }
}
