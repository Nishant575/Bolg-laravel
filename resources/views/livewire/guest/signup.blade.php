<div class="container">
  <div class="row justify-content-center form">
    <div class="col-4">
      <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-5">
              <h2 class = "card-title">Sign up</h2>
            </div>
          </div>
          <div class="row form2">
            <div class="col-12">
              <form class="" >
                <div class="form-group">
                  <label for="formGroupExampleInput">Name</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name" wire:model="name">
                </div>
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="form-group">
                  <label for="formGroupExampleInput2">Email ID</label>
                  <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="" name="email" wire:model="email">
                </div>
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="form-group">
                  <label for="formGroupExampleInput2">Password</label>
                  <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="" name="password" wire:model="password">
                </div>
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="text-center">
                  <button class="btn btn-primary" wire:click="submit">Sign up</button>
                </div>
              </form>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
