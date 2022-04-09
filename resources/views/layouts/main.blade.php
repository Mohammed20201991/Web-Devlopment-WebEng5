<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/united/bootstrap.min.css">

    <title>Music project</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">MyTracks</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="/projects">Projects</a>
          {{-- <a class="nav-item nav-link" href="transposer.html">Transposer</a> --}}
          <a class="nav-item nav-link" href="/projects/create">New project</a>
          <a class="nav-item nav-link" href="/about">About</a>
          <a class="nav-item nav-link" href="/contact">Contact</a>
        </div>
      </div>
    </nav>
{{-- if you want to change to other name 
    @yield('cat')  you have to change to other in view/main--}}
    @yield('content')
    {{-- <div class="jumbotron">
      <h1 class="display-4">MyTracks</h1>
      <p class="lead">A place where you can store, edit and view your music projects.</p>
      <!-- this is tatic vertion
    teamplte + data  will result(=) html file 
       -->
       <!-- Static -->
      <p class="lead">There are 15 projects in this apps .</p>
      <!-- Dynmic -->
      <p class="lead">There are {{ $numberOfProjects}} projects in this apps .</p>
      <hr class="my-4">
      <p class="lead">There are   projects in this apps .</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div> --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>