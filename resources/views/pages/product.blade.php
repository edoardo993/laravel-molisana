<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>La Molisana</title>
</head>
<body>

@extends('layout.layout')
@section('content')
  <main class="main-product-content">

    <div class="product-info">
        <h5 class="product-title">{{$pastaArray[$idProduct]['titolo']}}</h5>
        <img src="{{$pastaArray[$idProduct]['src-h']}}" alt="">
        <img src="{{$pastaArray[$idProduct]['src-p']}}" alt="">
        <p class="product-description">{!!$pastaArray[$idProduct]['descrizione']!!}</p>
    </div>

  </main>
@endsection

</body>
</html>