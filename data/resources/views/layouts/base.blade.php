<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/superhero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>
      @section('title')
        EvaluationDWM8
      @show
    </title>
  </head>
  <body>
    <header>@include('layouts.menu')</header>
    <h1>@section('title')
      Musiquenstock
    @show
    </h1>
    @yield('content')
  </body>
</html>
  
