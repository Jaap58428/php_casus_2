@extends('layouts.app')

@section('content')

  <div class="cijferlijst">
    <div class="cijferlijst-header">
      <h1>Cijfer invoeren</h1>
    </div>
    {{Form::open(array('action'=>'HomeController@store','method'=>'post','class'=>'create-form'))}}
      <fieldset class="create-field">
        <label for="module_code">Module</label>
        <select required class="" name="module_code">
          <option disabled selected style="display: none">Kies een module</option>
          @foreach ($modules as $module)
            <option value="{{ $module->code }}">{{ $module->code }} - {{ $module->beschrijving }}</option>
          @endforeach
        </select>
      </fieldset>

      <fieldset class="create-field">
        <label for="cijfer">Studentnummer</label>
        <select required class="" name="student_nummer">
          <option disabled selected style="display: none">Kies een student</option>
          @foreach ($users as $user)
            @if ($user->is_admin == 0)
              <option value="{{ $user->student_nummer }}">{{ $user->student_nummer }} - {{ $user->name }}</option>
            @endif
          @endforeach
        </select>
      </fieldset>

      <fieldset class="create-field">
        <label class="create-inputlabel" for="cijfer">Cijfer</label>
        <input required type="number" name="cijfer" min="1" max="10" step="0.1" value="">
      </fieldset>
      <fieldset class="create-field">
        <span></span>
        <input class="create-submit" type="submit" value="Invoeren">
      </fieldset>
    {{Form::close()}}
  </div>


@endsection
