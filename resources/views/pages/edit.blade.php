@extends('main.layout')
@section('content')
  <div id="wrapper">
    <br><br><br><br><br>
    <x-container-white-bg>
     <x-title>Edit news</x-title>
      <form action="/update/{{$articles->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control" name="subject" value="{{old('subject', $articles->subject)}}">
          @error('subject')
            <small>
              <p class="text-danger">Please enter a subject</p>
            </small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" value="{{old('title', $articles->title)}}">
          @error('title')
          <small>
            <p class="text-danger">Please enter a title</p>
          </small>
        @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" id="content" class="form-control" rows="6" name="content">{{$articles->content}}</textarea>
            @error('content')
            <small>
              <p class="text-danger">Please enter a content body</p>
            </small>
          @enderror
          </div>
        <div class="mb-3">
            <label for ="image" class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="image">
            <br>
            <img style="width: 250px; height: 250px" src="{{asset('storage/' . $articles->image)}}"/>
        </div>
        <button type="submit" class="btn btn-dark btn-sm">Edit news</button>
        <a href="/" type="button" class="btn btn-outline-dark btn-sm">Cancel</a>
      </form>
    </x-container-white-bg>
  </div>
@endsection