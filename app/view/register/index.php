<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 font-weight-bold text-dark mb-4">Register</h1>
                </div>
                <div class="text-center">
                  <?php Flasher::login(); ?>
                </div>
                <form class="user" method="post" action="<?= BASEURL ?>/register/insertUser">
                  <div class="form-group">
                    <label for="nama" class="font-weight-bold text-dark h6">Name</label>
                    <input name="nama" type="name" class="form-control form-control-user" id="nama" aria-describedby="emailHelp" placeholder="Enter Your Name..." />
                  </div>
                  <div class="form-group">
                    <p class="font-weight-bold text-dark h6">Email</p>
                    <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." />
                  </div>
                  <div class="form-group">
                    <p class="font-weight-bold text-dark h6">Phone Number</p>
                    <input type="number" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Phone Number..." name="no_telp" />
                  </div>
                  <div class="form-group mb-4">
                    <p class="font-weight-bold text-dark h6">Password</p>
                    <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" />
                  </div>
                  <div class="form-group mb-4">
                    <p class="font-weight-bold text-dark h6">Confirm Password</p>
                    <input name="confirmPassword" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Confirm Password" />
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-user btn-block">Register</button>
                  </div>
                </form>
                <div class="text-center mt-3">
                  <a class="small text-dark" href="<?= BASEURL ?>/login">Have an Account?</a>
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