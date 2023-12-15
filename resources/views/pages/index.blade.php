@extends('main.layout')
@section('content')
  <div id="wrapper">
    <br><br><br><br><br><br>
    <x-container-white-bg>
      <x-title>News</x-title>
      <div class="row justify-content-between">
        @if (count($articles) > 0)
          @foreach ($articles as $article)
          <x-card>
              <x-column>
                  <p class="title d-inline-block mb-2 text-emphasis fw-bold">{{$article->subject}}</p>
                  <h3 class="mb-0">{{$article->title}}</h3>
                  <div class="mb-1 text-body-secondary">{{$article->created_at}}</div>
                  <p class="card-text mb-auto">{{Str::limit($article->content, 50)}}</p>
                  <a href="/articles/{{$article->id}}" class="icon-link gap-1 icon-link-hover stretched-link">
                    Continue reading
                  </a>
              </x-column>
              @include('partials.thumbnail')
            </x-card>
          @endforeach
          @else
          <p class="text-center text-muted">No current news to fetch</p>
          <br><br>
        @endif
        @include('partials.paginate')
        <a href="/create-post" class="btn btn-dark" type="button">Add more news</a>
      </div>
    </x-container-white-bg>
    @include('pages.videos.index')
  </div>
@endsection