<div class="row justify-content-center">
  <div class="col-lg-3">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="card-body login-card-body">
            <div class="login-logo">
              <h3><b>Forgot Password</b></h3>
            </div>
            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

            <?= $this->session->flashdata('message'); ?>
            <!--memanggil &menampilkan message flash data-->

            <form action="<?= base_url('auth/forgotpassword'); ?>" method="post">
              <div class="input-group mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                  <a href="<?= base_url('welcome') ?>" class="btn btn-danger btn-user btn-block">Batal</a>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <br>
            <p class="text-center">---------- OR ----------</p>
            <div class="text-center">
              <div class="col-12">
                <a href="<?= base_url('auth') ?>">Login</a>
                <br>
                <a class="small-right" href="<?= base_url('auth/daftar') ?>">Create New Account!</a>
              </div>
            </div>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>