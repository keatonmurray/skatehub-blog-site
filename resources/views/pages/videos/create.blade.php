@extends('main.layout')
@section('content')
  <div id="wrapper">
    <br><br><br><br><br>
    <x-container-white-bg>
      <x-title>Upload video</x-title>
      <form action="/upload-video/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="location" class="form-label">Location</label>
          <input type="text" class="form-control" name="location">
          @error('location')
            <small>
              <p class="text-danger">Please enter a location</p>
            </small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="caption" class="form-label">Caption</label>
          <textarea type="text" class="form-control" id="caption" name="caption" col="10"></textarea>
          @error('caption')
          <small>
            <p class="text-danger">Please enter a caption</p>
          </small>
        @enderror
        </div>
        <div class="mb-3">
            <label for ="video" class="form-label">Upload Video</label>
            <input type="file" class="form-control" name="video" accept="video/*">
        </div>
        <button type="submit" class="btn btn-dark btn-sm">Share video</button>
        <a href="/" type="button" class="btn btn-outline-dark btn-sm">Cancel</a>
      </form>
    </x-container-white-bg>
  </div>
@endsection