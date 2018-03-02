@extends('layouts.app')

@section('content')

  <div class="cijferlijst">
    <div class="cijferlijst-header">
      <h1>Cijferoverzicht gefilterd op {{$filter_value}}</h1>

      {{Form::open(array('url'=>'/cijfer/filter','method'=>'post'))}}
          <input type="text" name="module_filter" value="" placeholder="Zoek een module...">
          <input class="create-submit" type="submit" value="Zoeken">
      {{Form::close()}}

    </div>

    @foreach ($cijfers as $cijfer)
      @if (strtoupper($filter_value) == $cijfer->module_code)
        <div class="cijferlijst-item" onclick="location.href='/cijfer/{{$cijfer->id}}'">
          <h3>{{ $cijfer->module_code }}</h3>
          <span>Studentnummer: {{ $cijfer->user_student_nummer}}</span>
          <span>Studentnaam: {{ $cijfer->user->name}}</span>
          <span>Cijfer: </span>
          @if ($cijfer->cijfer > 5.5)
            <span class="good-cijfer">{{$cijfer->cijfer}}</span>
            @else
            <span class="bad-cijfer">{{$cijfer->cijfer}}</span>
          @endif
        </div>
      @endif
    @endforeach
  </div>


@endsection
