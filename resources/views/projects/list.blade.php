
@extends('layouts.main')
@section('content')
{{-- 10/4/2022 --}}
    <div class="container">
      <div class="row">

        @foreach ($projects as $project)         
        <div class="col-sm-3 my-3">
          <div class="card h-100">
            <img src="{{ $project->image_url ?:'https://cdn.dribbble.com/users/12015/screenshots/2131050/apple_music.png' }}">
            <div class="card-body">
              <h5 class="card-title">{{ $project['name'] }}</h5>
              <p class="card-text">{{ $project->description }}</p>
              <p class="card-text">Cool project description</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <a href="/projects/{{ $project['id'] }}" class="btn btn-primary">Open</a>
              <a href="/projects/{{ $project['id'] }}/edit" class="btn btn-secondary">Edit</a>
            </div>
          </div>
        </div>
        @endforeach

@endsection

{{-- <div class="container">
  <div class="row">

          <p class="card-text">Cool project description</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          <a href="#" class="btn btn-primary">Open</a>
          <a href="/projects/{{ $project['id'] }}/edit" class="btn btn-secondary">Edit</a>
        </div>
      </div>
    </div>

      </div>
    </div>

  </div>
</div>
@endsection --}}