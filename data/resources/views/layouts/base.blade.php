<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/superhero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>
      @section('title')
    </title>
  </head>
  <body>
    <header>@include('layouts.menu')</header>
    <div class="container-fluid d-flex justify-content-center mt-5">
      <h1>@section('title')
      </h1>
      @yield('content')
    </div>
    
  </body>
</html>
