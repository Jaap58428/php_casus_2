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
      $cijfers = Cijfer::orderBy('created_at', 'desc')->get();
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
      $this->validate($request, [
        'module_code' => 'required',
        'student_nummer' => 'required',
        'cijfer' => 'required',
      ]);

      $cijfer = new Cijfer;
      $cijfer->cijfer = $request->input('cijfer');
      $cijfer->module_code = $request->input('module_code');
      $cijfer->user_student_nummer = $request->input('student_nummer');
      $cijfer->save();
      return redirect('/cijfer')->with('success', 'Cijfer ingevoerd');


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
        $modules = Module::all();
        $users = User::all();
        $cijfer = Cijfer::find($id);


        $data = array(
          'modules' => $modules,
          'users' => $users,
          'cijfer' => $cijfer,
        );

        return view('cijfers.edit')->with($data);
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
      $this->validate($request, [
        'module_code' => 'required',
        'student_nummer' => 'required',
        'cijfer' => 'required',
      ]);

      $cijfer = Cijfer::find($id);
      $cijfer->cijfer = $request->input('cijfer');
      $cijfer->module_code = $request->input('module_code');
      $cijfer->user_student_nummer = $request->input('student_nummer');
      $cijfer->save();
      return redirect('/cijfer')->with('success', 'Cijfer aangepast');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cijfer = Cijfer::find($id);
        $cijfer->delete();
        return redirect('/cijfer')->with('success', 'Cijfer verwijderd');

    }
}
