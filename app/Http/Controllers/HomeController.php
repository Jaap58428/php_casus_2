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
      $user_id = auth()->user()->id;
      $user = User::find($user_id);
      if ($user->is_admin) {
        $cijfers = Cijfer::orderBy('created_at', 'desc')->get();
      } else {
        $cijfers = $user->cijfers;
      };


      $data = array(
        'cijfers' => $cijfers,
        'user' => $user
      );


      // return $cijfers;
      return view('cijfers.index')->with($data);
    }

    public function filter(Request $request)
    {

      $this->validate($request, [
        'module_filter' => 'required|exists:module,code|exists:cijfers,module_code',
      ]);

      $user_id = auth()->user()->id;
      $user = User::find($user_id);
      if ($user->is_admin) {
        $cijfers = Cijfer::orderBy('created_at', 'desc')->get();
      } else {
        $cijfers = $user->cijfers;
      };



      $data = array(
        'filter_value' => $request->module_filter,
        'cijfers' => $cijfers
      );

      return view('cijfers.filter')->with($data);

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

      if (!auth()->user()->is_admin) {
        return redirect('/cijfer')->with('error', 'Helaas, deze pagina is niet voor jou.');
      }

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

      if (!auth()->user()->is_admin) {
        return redirect('/cijfer')->with('error', 'Helaas, deze pagina is niet voor jou.');
      }

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

        if (auth()->user()->student_nummer !== $cijfer->user_student_nummer) {
          return redirect('/cijfer')->with('error', 'Helaas, deze pagina is niet voor jou.');
        }

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


        if (!auth()->user()->is_admin) {
          return redirect('/cijfer')->with('error', 'Helaas, deze pagina is niet voor jou.');
        }

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

      if (!auth()->user()->is_admin) {
        return redirect('/cijfer')->with('error', 'Helaas, deze pagina is niet voor jou.');
      }

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

        if (!auth()->user()->is_admin) {
          return redirect('/cijfer')->with('error', 'Helaas, deze pagina is niet voor jou.');
        }

        $cijfer = Cijfer::find($id);
        $cijfer->delete();
        return redirect('/cijfer')->with('success', 'Cijfer verwijderd');

    }
}
