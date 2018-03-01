@extends('layouts.app')

@section('content')

  <div class="cijferlijst">
    <div class="cijferlijst-header">
      <h1>Cijfer aanpassen</h1>
    </div>
    {{Form::open(array('action'=> ['HomeController@update', $cijfer->id],'method'=>'post','class'=>'create-form'))}}
      <fieldset class="create-field">
        <label for="module_code">Module</label>
        <select required class="" name="module_code">
          @foreach ($modules as $module)
            <option value="{{ $module->code }}"
              @if ($cijfer->module_code == $module->code)
                selected
              @endif
              >{{ $module->code }} - {{ $module->beschrijving }}</option>
          @endforeach
        </select>
      </fieldset>

      <fieldset class="create-field">
        <label for="cijfer">Studentnummer</label>
        <select required class="" name="student_nummer">
          <option disabled selected style="display: none">Kies een student</option>
          @foreach ($users as $user)
            @if ($user->is_admin == 0)
              <option value="{{ $user->student_nummer }}"
                @if ($cijfer->user_student_nummer == $user->student_nummer)
                  selected
                @endif
                >{{ $user->student_nummer }} - {{ $user->name }}</option>
            @endif
          @endforeach
        </select>
      </fieldset>

      <fieldset class="create-field">
        <label class="create-inputlabel" for="cijfer">Cijfer</label>
        <input required type="number" name="cijfer" min="1" max="10" step="0.1" value="{{$cijfer->cijfer}}">
      </fieldset>
      <fieldset class="create-field">
        <span></span>
        <input class="create-submit" type="submit" value="Aanpassen">
      </fieldset>
      {{Form::hidden('_method', 'PUT')}}
    {{Form::close()}}
  </div>


@endsection
