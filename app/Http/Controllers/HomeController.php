<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cijfer;
use App\Module;
use App\User;

class HomeController extends Controller
{

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
      $cijfers = Cijfer::all();
      // return $cijfers;
      return view('cijfers.index')->with('cijfers', $cijfers);
    }

    public function filter($filter)
    {
      $cijfer = Cijfer::where('module_code', $filter);

      return view('cijfers.show')->with('cijfer', $cijfer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $modules = Module::all();
      $users = User::all();

      $data = array(
        'modules' => $modules,
        'users' => $users,
      );

      return view('cijfers.create')->with($data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cijfer = Cijfer::find($id);
        return view('cijfers.show')->with('cijfer', $cijfer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
