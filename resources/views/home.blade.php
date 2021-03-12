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

  <main class="main-content">

    <div class="boxes">

      <div class="pasta-lunga">

        <h2 class="box-title">le lunghe</h2>

        <div class="pasta-type">

          @foreach ($pastaArray as $id => $pasta)
            @if($pasta['tipo'] === 'lunga')
              <a href="/product/{{$id}}"><img src="{{$pasta['src']}}" alt=""></a>
            @endif
          @endforeach

        </div>

      </div>

      <div class="pasta-corta">

        <h2 class="box-title">le corte</h2>

        <div class="pasta-type">
          @foreach ($pastaArray as $id => $pasta)
            @if($pasta['tipo'] === 'corta')
            <a href="/product/{{$id}}"><img src="{{$pasta['src']}}" alt=""></a>
            @endif
          @endforeach
        </div>

      </div>

      <div class="pasta-cortissima">

        <h2 class="box-title">le cortissime</h2>

        <div class="pasta-type">

          @foreach ($pastaArray as $id => $pasta)
            @if($pasta['tipo'] === 'cortissima')
              <a href="/product/{{$id}}"><img src="{{$pasta['src']}}" alt=""></a>
            @endif
          @endforeach

        </div>

      </div>

    </div>

  </main>

  @endsection

</body>
</html>