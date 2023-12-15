@extends('main.layout')
@section('content')
  <div id="wrapper">
    <x-container-white-bg>
      <br><br><br><br><br>
      <x-title>Edit video</x-title>
      <form action="/update-video/{{$video->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="location" class="form-label">Location</label>
          <input type="text" class="form-control" name="location" value="{{old('location', $video->location)}}">
          @error('location')
            <small>
              <p class="text-danger">Please enter a location</p>
            </small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="caption" class="form-label">Caption</label>
          <textarea type="text" class="form-control" id="caption" name="caption" col="10">{{$video->caption}}</textarea>
          @error('caption')
          <small>
            <p class="text-danger">Please enter a caption</p>
            </small>
          @enderror
        </div>
        <div class="mb-3">
            <label for ="video" class="form-label">Upload Video</label>
            <input type="file" class="form-control" name="video" accept="video/*">
            <video style="width: 250px; height: 250px" controls>
                <source src="{{asset('storage/' . $video->video)}}" type="video/mp4"/>
            </video>
        </div>
        <button type="submit" class="btn btn-dark btn-sm">Save update</button>
        <a href="/" type="button" class="btn btn-outline-dark btn-sm">Cancel</a>
      </form>
    </x-container-white-bg>
  </div>
@endsection