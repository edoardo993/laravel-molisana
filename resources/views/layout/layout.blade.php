<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Laravel-Molisana</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>

        <header id="header">

            <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="" class="logo">
            
            <ul class="header-list">
              <li>Home</li>
              <li>Prodotti</li>
              <li>News</li>
            </ul>
        
          </header>

        <main class="main-content">
            @yield('content')
        </main>

        <footer id="footer">

            <div class="footer-content">
        
              <div class="la-molisana-info">
        
                <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="" class="logo">
                <ul>
                  <li>Ragione sociale: La Molisana S.P.A.</li>
                  <li>Sede legale: Contrada Colle delle Alpi, 100/A</li>
                  <li>86100 - Campobasso (CB)</li>
                  <li>Pec: lamolisana@pec.it</li>
                  <li>Tel: +39 0874 4981</li>
                  <li>Fax: +39 0874 629584</li>
                  <li>info@lamolisana.it (per segnalazioni degli utenti)</li>
                  <li>commerciale@lamolisana.it</li>
                  <li>export@lamolisana.it</li>
                  <li>numero verde 800818081</li>
                  <li>telefono 3801292455</li>
                </ul>
        
              </div>
        
              <div class="la-molisana-info">
        
                <h4 class="footer-title">pastificio</h4>
        
                <ul>
                  <li>Il Pastificio</li>
                  <li>Grano decorticato a pietra</li>
                  <li>Il Molise c'è</li>
                  <li>Filiera Integrata</li>
                  <li>100 anni di pasta</li>
                  <li>Sartoria della pasta</li>
                  <li>Spaghetto Quadrato</li>
                  <li>Le Persone</li>
                </ul>
        
                <h4 class="footer-title">prodotti</h4>
        
                <ul>
                  <li>Le Classiche</li>
                  <li>Le Integrali</li>
                  <li>Le Speciali</li>
                  <li>Le Biologiche</li>
                  <li>Le Gluten-Free</li>
                  <li>Le Semole</li>
                  <li>Le Extra di Lusso</li>
                </ul>
        
              </div>
        
              <div class="la-molisana-info">
        
                <h4 class="footer-title">collezione da chef</h4>
        
                <ul>
                  <li>Collezione da chef</li>
                  <li>Grandi Cucine</li>
                  <li>Biologiche</li>
                  <li>Quadrate</li>
                </ul>
        
              </div>
        
            </div>
        
          </footer>

    </body>
</html>