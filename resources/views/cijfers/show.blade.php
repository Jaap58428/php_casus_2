@extends('layouts.app')

@section('content')

  <button type="button" name="button" onclick="location.href='/cijfer'">Terug</button>
  <h1>Studentnummer: {{$cijfer->user_student_nummer}} - Module: {{$cijfer->module_code}}</h1>
  <h3>Cijfer: {{$cijfer->cijfer}}</h3>
  <h3>Studentnaam: {{$cijfer->user->name}}</h3>
  <button type="button" name="button">Verwijder</button>
  <button type="button" name="button">Verander</button>


@endsection
