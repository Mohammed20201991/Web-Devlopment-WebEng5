@extends('layouts.main')

@section('content')

    <div class="container py-3">
      <h2>New project</h2>
      {{-- action to wich endpoint want to go  --}}
      <form  action ="/projects" method ="post">  
        @csrf
              {{-- HTTP METHODS GET(ideonpodente - get information from thre server),
                POS(send information to the server to create new entity -side effect saving data in data base ), 
                PUT(I am sending the data to replace the content ) ,
                DELETE(I am sending rhe data to delete entity from server),... 
                and those methods has meaning  --}}
        <div class="form-group">
          <label for="name">Project name</label>
          {{-- the name attribute important here without we cannot send the data  --}}
          <input value="{{ old('name', '') }}" type="text" class="form-control @error('name') is-invalid @enderror"  name ="name" id="name" placeholder="">
          @error('name')           
          <div class="invalid-feedback">
            {{ $message }} 
          </div>
          @enderror
        </div>
       
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{ old('description', '') }}</textarea>
            @error('description')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>


        <div class="form-group">
          <label for="image_url">Background image URL</label>
          <input value="{{ old('image_url', '') }}" type="text" class="form-control @error('image_url') is-invalid @enderror" name ="image_url" id="image_url" placeholder="">
          @error('image_url')           
          <div class="invalid-feedback">
            {{ $message }} 
          </div>
          @enderror
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add new project</button>
        </div>

      </form>
    </div>
@endsection