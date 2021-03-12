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

    @foreach ($pastaArray as $item => $pasta)

      <div class="product-info">
          <h5 class="product-title">{{$pasta['titolo']}}</h5>
          <img src="{{$pasta['src-h']}}" alt="">
          <img src="{{$pasta['src-p']}}" alt="">
          <p class="product-description">{!!$pasta['descrizione']!!}</p>
      </div>

    @endforeach

  </main>

@endsection

</body>
</html>