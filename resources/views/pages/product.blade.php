@extends('layout.layout')
@section('content')
  <main class="main-product-content">

    <div class="product-info">
        <h5 class="product-title">{{$pastaArray[$idProduct]['titolo']}}</h5>
        <img src="{{$pastaArray[$idProduct]['src-h']}}" alt="">
        <i class="fas fa-chevron-left left-arrow"></i>
        <i class="fas fa-chevron-right right-arrow"></i>
        <img src="{{$pastaArray[$idProduct]['src-p']}}" alt="">
        <p class="product-description">{!!$pastaArray[$idProduct]['descrizione']!!}</p>
    </div>

  </main>
@endsection