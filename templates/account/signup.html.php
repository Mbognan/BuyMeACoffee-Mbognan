

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center mb-4">Sign Up</h2>
            <form method="post" action="<?= site_url('/signup')?>">
              <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" >
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" >
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" >
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary" name="signup_button" value="1">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</header>

