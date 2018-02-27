@extends('layouts.app')

@section('content')

  <h1>Welkom {{$user_name}}!</h1>
  @if (count($modules) > 0)
    <ul>
      @foreach ($modules as $module)
      <li>{{$module}}</li>
    @endforeach
    </ul>
  @endif

@endsection
