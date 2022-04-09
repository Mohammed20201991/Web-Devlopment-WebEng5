@extends('layouts.main')

{{-- if you want to change to cat you need to change in main.blade also 
      @section('cat')   --}}
@section('content')
<div class="jumbotron">
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
      <p class="lead">There are <?php echo $numberOfProjects ?>  projects in this apps .</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
    @endsection