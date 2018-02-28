@extends('layouts.app')

@section('content')

  <div class="cijferlijst">
    <div class="cijferlijst-header">      
      <h1>Cijferoverzicht</h1>

      @include('zoekbalk')
    </div>

    @foreach ($cijfers as $cijfer)
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
    @endforeach
  </div>


@endsection
