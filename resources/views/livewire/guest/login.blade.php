<div class="container">
  <div class="row justify-content-center form">
    <div class="col-4">
      <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-5">
              <h2 class = "card-title">Login</h2>
            </div>
          </div>
          <div class="row form2">
            <div class="col-12">
              <form class="" >
                <div class="form-group">
                  <label for="formGroupExampleInput2">Email ID</label>
                  <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="" name="email" wire:model="email">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Password</label>
                  <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="" name="password" wire:model="password">
                </div>
                @if ($hasError === true)
                <div class="alert alert-danger">
                    <p>Invalid email or password</p>
                </div>
                @endif
                <br>
                <div class="text-center">
                  <button  class="btn btn-primary"  wire:click="submit">Log in</button>
                </div>
                <br>
              </form>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
