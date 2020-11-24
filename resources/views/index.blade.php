<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RescueMyCar</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="/css/main.css" rel="stylesheet" >
        <!-- Styles -->
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="/js/datepicker.js" type="text/javascript"></script>
  <script src="/js/main.js" type="text/javascript"></script>

    </head>
    <body class=".container-fluid">
<nav class="navbar navbar-expand-sm bg-blue navbar-blue">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#"><a class="nav-link nav-item" href="#"><img class= "img-responsive" id="logo" src="https://www.rescuemycar.com/quoteandbuy/inc/themes/rescuemycar_new/images/rmc_300x128.png" alt = "RescueMyCar"> </a> </li>      </a> 
  <!-- Links -->
  <ul class="navbar-nav ">
  <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/quote">Get a Quote</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/customer">Customer Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
  </ul>
</nav>
         <div>
              <h2 class="h2heading"> Choose your breakdown membership</h2>
         </div>
         @yield('content')

         <footer>
               Copyright 2020 RescueMyCar
         </footer>
    </body>
 </html>   