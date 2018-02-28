@extends('layouts.app')

@section('content')
  <div class="cijfer-single">
    {{-- <button type="button" name="button" onclick="location.href='/cijfer'">Terug</button> --}}
    <h1>Studentnummer: {{$cijfer->user_student_nummer}} - Module: {{$cijfer->module_code}}</h1>
    <div class="cijfer-single-data">
      <div class="cijfer-single-data-row">
        <span>Cijfer</span>
        <span>@if ($cijfer->cijfer > 5.5)
          <span class="good-cijfer">{{$cijfer->cijfer}}</span>
          @else
          <span class="bad-cijfer">{{$cijfer->cijfer}}</span>
        @endif</span>
      </div>
      <div class="cijfer-single-data-row">
        <span>Naam</span><span>{{$cijfer->user->name}}</span>
      </div>
      <div class="cijfer-single-data-row">
        <span>Vaardigheden</span>
        <span>@foreach ($cijfer->module->vaardigheden->where('module_code', $cijfer->module_code) as $skill)
          <div>{{$skill->beschrijving}} </div>
        @endforeach</span>
      </div>
    </div>
    <div class="cijfer-single-edits">
      <button type="button" name="button">Verwijder</button>
      <button type="button" name="button">Verander</button>
    </div>

  </div>
@endsection
