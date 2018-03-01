@extends('layouts.app')

@section('content')

  <div class="cijferlijst">
    <div class="cijferlijst-header">
      <h1>Cijfer invoeren</h1>
    </div>
    <form class="" action="HomeController@store" method="post">
      <fieldset>
        <label for="module_code">Module</label>
        {{-- <input type="text" name="module_code" value="" placeholder="IARCH, IHBO, IPMEDT2, enz."> --}}
        <select class="" name="module_code">
          @foreach ($modules as $module)
            <option value="{{ $module->code }}">{{ $module->beschrijving }}</option>
          @endforeach
        </select>
      </fieldset>
      <fieldset>
        <label for="cijfer">Studentnummer</label>
        {{-- <input type="text" name="module_code" value="" placeholder="IARCH, IHBO, IPMEDT2, enz."><select class="" name="module_code"> --}}
        <select class="" name="student_nummer">
          @foreach ($users as $user)
            @if ($user->is_admin == 0)
              <option value="{{ $user->student_nummer }}">{{ $user->student_nummer }} - {{ $user->name }}</option>
            @endif
          @endforeach
        </select>
      </fieldset>
      <fieldset>
        <label class="create-inputlabel" for="cijfer">Cijfer</label>
        <input type="number" name="cijfer" min="1" max="10" step="0.1" value="">
      </fieldset>
    </form>
  </div>


@endsection
