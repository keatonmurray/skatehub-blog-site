@extends('main.layout')
@section('content')
  <div id="wrapper">
    <br><br><br><br><br>
    <x-container-white-bg>
      <x-title>{{$video->location}}</x-title>
        <div class="jumbotron text-center">
            <div class="image-holder">
                <video width="100%" height="100%" controls>
                    <source src="{{asset('storage/' . $video->video)}}" type="video/mp4">
                </video>
            </div>
        </div>
        <br>
        <div class="mx-auto">
            <p>{{$video->caption}}</p>
        </div>
        <div class="d-flex">
          <form action="/delete-video/{{$video->id}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="/video/{{$video->id}}/edit" type="button" class="btn btn-dark btn-sm">Edit</a>
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            <a href="/" class="btn btn-outline-dark btn-sm" type="button">Go back</a>
          </form>
        </div>
        <br>
    </x-container-white-bg>
  </div>
@endsection