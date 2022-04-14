@extends('layouts.main')

@section('content')
    <div class="container py-3">
      <h2>{{$project->name}}</h2>
      <p>{{ $project-> description}}</p>
      <a href="{{route('projects.tracks.create',['project'=>$project->id])}}" class="btn btn-primary">Add new track</a>
      <a href="/projects/{{ $project['id'] }}/edit" class="btn btn-secondary">Edit</a>

      {{-- <a href="new-track.html" class="btn btn-primary">Delete track</a> --}}
      {{-- 2 ways to to get http (anchor and form we will use form instead ) --}}
      <form action="/projects/{{ $project['id'] }}" method="post" class="d-inline">
        <!-- HTTP methods: get, post, put, delete -->
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-warning">Delete</button>
      </form>


      <div class="list-group">
        @foreach ($project->tracks as $track)          
        <div class="list-group-item list-group-item-action" style="background-color: {{$track->color}} ">
          <p class="d-flex justify-content-between align-items-center">
            <span> 
              {{$track->name}} 
              <small>{{$track->filename}} </small>
            </span>
            <span class="badge badge-primary badge-pill">Muted</span>
          </p>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item p-1">Cras justo odio</li>
            <li class="list-group-item p-1">Dapibus ac facilisis in</li>
            <li class="list-group-item p-1">Morbi leo risus</li>
          </ul>
          <a href="{{ route('tracks.edit',['track'=>$track->id]) }}" class="btn btn-secondary">Edit</a>
          {{-- where to go if we click on this edite button --}}
          <form action="{{ route('tracks.destroy',['track'=> $track->id])}}" method="post" class="d-inline">
            <!-- HTTP methods: get, post, put, delete -->
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-warning">Delete</button>
          </form>
        </div>   
        @endforeach  
        
        <a href="#" class="list-group-item list-group-item-action" style="background-color: #ffre3}} ">
          <p class="d-flex justify-content-between align-items-center">
            <span> 
              this ids static remove later <br
              {{-- {{$track->name}}  --}}
              <p>Track <br></p>
              {{-- <small>{{$track->filename}} </small> --}}Filename
            </span>
            <span class="badge badge-primary badge-pill">Muted</span>
          </p>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item p-1">Cras justo odio</li>
            <li class="list-group-item p-1">Dapibus ac facilisis in</li>
            <li class="list-group-item p-1">Morbi leo risus</li>
          </ul>
        </a>   
      </div>
    </div>

    @endsection