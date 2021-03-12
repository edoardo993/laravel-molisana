@extends('layout.layout')
@section('content')
  <main class="main-product-content">

    <div class="product-info">
        <h5 class="product-title">{{$pastaArray[$idProduct]['titolo']}}</h5>
        <img src="{{$pastaArray[$idProduct]['src-h']}}" alt="">
        <div class="left-slider-arrow"><i class="fas fa-chevron-left left-arrow"></i></div>
        <div class="right-slider-arrow"><i class="fas fa-chevron-right right-arrow"></i></div>
        <img src="{{$pastaArray[$idProduct]['src-p']}}" alt="">
        <p class="product-description">{!!$pastaArray[$idProduct]['descrizione']!!}</p>
    </div>

  </main>
@endsection