<div class="container">
    <div class="row message-box">
      <div class="col-lg-9">
          <h2>All Posts</h2>
          </div>
      </div>
      @foreach($posts as $post)
      <div class="row card-box">
          <div class="col-lg-9">
              <div class="card">
                  <div class="card-header h-40" style="padding-bottom: 0rem; background-color: rgb(179, 242, 217);">
                    <div class="row justify-start my-2">
                      <h5 class="col-6 font-bold text-lg">{{$post->creator['name']}}</h5>
                      <p class="col-6 text-xs text-gray-500 font-semibold time text-right">{{$post->created_at}}</p>
                  </div>
                  </div>
                  <div class="card-body">
                    <p class="text-gray-800">{{$post->body}}</p>

                  </div>

              </div>
          </div>
      </div>
      @endforeach
</div>
