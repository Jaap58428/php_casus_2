@extends('layouts.app')

@section('content')

  <h1>cijfers</h1>



  @foreach ($cijfers as $cijfer)
    <div class="cijferlijst-item">
      <h3><a href="/cijfer/{{$cijfer->id}}">{{ $cijfer->module_code }}</a></h3>
      <span>{{ $cijfer->student_nummer}}</span>
      @if ($cijfer->cijfer < 5.5)
        <span class="good-cijfer">{{$cijfer->cijfer}}</span>
        @else
        <span class="bad-cijfer">{{$cijfer->cijfer}}</span>
      @endif
    </div>
  @endforeach

@endsection
