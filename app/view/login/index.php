<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center mt-5">
                  <h1 class="h4 font-weight-bold text-dark mb-4">Login</h1>
                </div>
                <div class="text-center mt-5">
                  <?php Flasher::login(); ?>
                </div>
                <form class="user" method="post" action="<?= BASEURL ?>/auth/userValidate">
                  <div class="form-group">
                    <label for="email" class="font-weight-bold text-dark h6">Email</label>
                    <input name="email" type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." />
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="font-weight-bold text-dark h6">Password</label>
                    <input name="password" type="password" class="form-control form-control-user" id="password" placeholder="Password" />
                  </div>
                  <div class="form-group">
                    <button class="btn btn-dark btn-user btn-block">Login</button>
                  </div>
                </form>
                <div class="text-center mt-3">
                  <a class="small text-dark" href="<?= BASEURL ?>/register/form">Dont have an Account?</a>
                </div>
              </div>
            </div>
            <img class="col-lg-6 d-none d-lg-block" src="<?= BASEURL ?>/img/loginRegister.png" alt="loginImg" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>