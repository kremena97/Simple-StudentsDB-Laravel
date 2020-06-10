<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav mr-auto">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </div>
    <div class="navbar-nav flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="nav-link">
                    @auth
                        <a href="{{ url('/home') }}"><i class="fa fa-user"></i></a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
  </div>
</nav>
        

        <div class="jumbotron text-center">
  <h1>Students DB</h1>
  <p>Burgas Free University</p> 
</div>
  
<div class="container">
  <h3>Студенти</h3>
  <div class="row">
    <div class="col-sm-6">
      <h4>Център по Инофрматика и технически науки</h4>
      <img alt="Център по информатика и технически науки" class="img-fluid" src="https://www.bfu.bg/uploads/pages/computers.jpg">
      <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Cras justo odio
    <span class="badge badge-info">Info</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Dapibus ac facilisis in
    <span class="badge badge-primary badge-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Morbi leo risus
    <span class="badge badge-primary badge-pill">1</span>
  </li>
</ul>
    </div>
    <div class="col-sm-6">
      <h4>Център по икономически и управленски науки</h4>
      <img alt="Център по икономически и управленски науки" class="img-fluid" src="https://www.bfu.bg/uploads/pages/public2.jpg">
      <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action ">Vestibulum at eros</a>
</div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <h4>Център по юридически науки</h4>
      <img alt="Център по юридически науки" class="img-fluid" src="https://www.bfu.bg/uploads/pages/lawbooks1.jpg">
      <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action ">Vestibulum at eros</a>
</div>
    </div>
    <div class="col-sm-6">
      <h4>Център по хуманитарни науки</h4>
      <img alt="Център по хуманитарни науки" class="img-fluid" src="https://www.bfu.bg/uploads/pages/public1.jpg">
      <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action ">Vestibulum at eros</a>
</div>
    </div>
  </div>
</div>

    </body>
</html>
