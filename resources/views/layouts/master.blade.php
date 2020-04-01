<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style>

</style>
    <title>COVID-19</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><i class="text-danger fa fa-bug"></i> COVID19-STATS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="/"><i class="fa fa-home"></i> UTAMA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/country/Malaysia"><i class="fa fa-globe"></i> BERDASARKAN NEGARA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/asean"><i class="fa fa-map-marker"></i>  NEGARA ASEAN</a>
      </li>

      
     
    </ul>
    <ul class="navbar-nav pull-right">

    <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-calendar"></i> {{Carbon\Carbon::now()->format('l jS \\of F Y')}}</a>
      </li>
    
    </ul>
   
  </div>
</nav>
<div class="container">

@yield('content')


    <footer class="footer text-center">

    <p>Made with <span style="color: #e25555;">&#9829;</span> by BHS</p>

    
    <small>&copy; Copyright 2020, budihermawan.com</small>
    
    </footer>

  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>


  </body>
</html>