@extends('main.layout')
@section('content')
  <div id="wrapper">
    <br><br><br><br><br>
    <x-container-white-bg>
      <x-title>{{$articles->title}}</x-title>
        <div class="jumbotron text-center">
            <div class="image-holder">
              <img src="{{asset('storage/' . $articles->image)}}" class="img-fluid" style="height:100%; width: 100%;">
            </div>
        </div>
        <br>
        <div class="mx-auto">
            <p>{{$articles->content}}</p>
        </div>
        <div class="d-flex">
          <form action="/articles/{{$articles->id}}/delete" method="POST">
            @csrf
            @method('DELETE')
            <a href="/articles/{{$articles->id}}/edit" type="button" class="btn btn-dark btn-sm">Edit</a>
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            <a href="/" class="btn btn-outline-dark btn-sm" type="button">Go back</a>
          </form>
        </div>
        <br>
    </x-container-white-bg>
  </div>
@endsection