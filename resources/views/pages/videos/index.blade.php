<x-container-white-bg>
    <x-title>Videos</x-title>
    <div class="row justify-content-between">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($videos as $video)
          <div class="col">
            <div class="card shadow-sm">
             @include('partials.video')
              <div class="card-body">
                <span>
                  <small class="text-body-secondary fw-bold">
                    <i class="fa-solid fa-location-dot"></i>
                    {{$video->location}}
                  </small>
                </span>
                <p class="card-text mb-4">{{Str::limit($video->caption, 30)}}</p>
                <div class="row justify-content-between">
                  <div class="btn-group">
                    <a href="/video/{{$video->id}}" type="button" class="btn btn-sm btn-dark">See details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>
        @include('partials.paginate')
        <a href="/upload-video" class="btn btn-dark" style="margin-top: 25px">Add more videos</a>
      </div>
    </div>
  </x-container-white-bg>