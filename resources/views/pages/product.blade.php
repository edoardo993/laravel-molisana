@extends('layout.layout')
@section('content')
  <main class="main-product-content">

    <div class="product-info">

        <h5 class="product-title">{{$pastaArray[$idProduct]['titolo']}}</h5>
        <img src="{{$pastaArray[$idProduct]['src-h']}}" alt="">
        <img src="{{$pastaArray[$idProduct]['src-p']}}" alt="">
        <p class="product-description">{!!$pastaArray[$idProduct]['descrizione']!!}</p>

        @if($idProduct === 0)
            <a href="/product/{{count($pastaArray)}}"><div class="left-slider-arrow"><i class="fas fa-chevron-left left-arrow"></i></div></a>
        @else
            <a href="/product/{{$idProduct - 1}}"><div class="left-slider-arrow"><i class="fas fa-chevron-left left-arrow"></i></div></a>
        @endif

        @if($idProduct === count($pastaArray))
            <a href="/product/0"><div class="right-slider-arrow"><i class="fas fa-chevron-right right-arrow"></i></div></a>
        @else
            <a href="/product/{{$idProduct + 1}}"><div class="right-slider-arrow"><i class="fas fa-chevron-right right-arrow"></i></div></a>
        @endif
        
    </div>

  </main>
@endsection