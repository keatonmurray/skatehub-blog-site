@extends('main.layout')
@section('content')
  <div id="wrapper">
    <br><br><br><br><br>
    <x-container-white-bg>
     <x-title>Create news</x-title>
      <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control" name="subject">
          @error('subject')
            <small>
              <p class="text-danger">Please enter a subject</p>
            </small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title">
          @error('title')
          <small>
            <p class="text-danger">Please enter a title</p>
          </small>
        @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" id="content" class="form-control" rows="6" name="content"></textarea>
            @error('content')
            <small>
              <p class="text-danger">Please enter a content body</p>
            </small>
          @enderror
        </div>
        <div class="mb-3">
            <label for ="image" class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <button type="submit" class="btn btn-dark btn-sm">Share news</button>
        <a href="/" type="button" class="btn btn-outline-dark btn-sm">Cancel</a>
      </form>
    </x-container-white-bg>
  </div>
@endsection