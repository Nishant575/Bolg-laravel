<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron head text-light text-center" style="background-color: #F7FFFF;">

              <div class="row">
                <div class="col-12">
                <h2>Welcome {{$user_name}}!</h2>
           </div>
         </div>
        </div>
        </div>
    </div>
    <div class="row message-box">
      <div class="col-lg-9">

          <div class="input-group">
            <div class="input-group-prepend">
              <button class="btn btn-outline-secondary" wire:click='addpost'>Post</button>
            </div>
            <textarea class="form-control" name="msg" aria-label="With textarea" wire:model='newpost' placeholder="Type something....."></textarea>
          </div>

          </div>
      </div>
      @foreach($posts as $post)
      <div class="row card-box">
          <div class="col-lg-9">
              <div class="card">
                  <div class="card-header h-40" style="padding-bottom: 0rem; background-color: rgb(179, 242, 217);">
                    <div class="row justify-start my-2">
                      <h5 class="col-6 font-bold text-lg">{{$user_name}}</h5>
                      <p class="col-6 text-xs text-gray-500 font-semibold time text-right">{{$post->created_at}}</p>
                  </div>
                  </div>
                  <div class="card-body">
                    <p class="text-gray-800">{{$post->body}}</p>

                  </div>
                  <div class="card-footer" style="padding-top: 0.2rem; padding-bottom: 0.2rem; background-color: rgb(179, 242, 217);">
                    <a class="card-link text-danger" wire:click="remove({{$post->id}})">Delete</a>
                  </div>
              </div>
          </div>
      </div>
      @endforeach
</div>
