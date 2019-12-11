<div class="content-wrapper" style="min-height: 1416.81px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile foto -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/') . $user['foto']; ?>" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center"><?= $user['username'] ?></h3>

              <p class="text-muted text-center">Member Since : <?= date('F Y', $user['tanggal_daftar']); ?></p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-signature mr-1"></i> Nama Lengkap</strong>
              <p class="text-muted"><?= $user['nama_user'] ?></p>
              <hr>
              <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
              <p class="text-muted"><?= $user['alamat'] ?></p>
              <hr>
              <strong><i class="fas fa-venus-mars mr-1"></i> Jenis Kelamin</strong>
              <p class="text-muted"><?= $user['jenis_kelamin'] ?></p>
              <hr>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#ubahPassword" data-toggle="tab">Ubah Password</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="ubahPassword">
                  <?= $this->session->flashdata('message'); ?>
                  <form action="<?= base_url('user/ubahpassword'); ?>" method="post">
                    <div class="form-group">
                      <label for="current_password">Current Password</label>
                      <input type="password" class="form-control" id="current_password" name="current_password">
                      <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="new_password1">New Password</label>
                      <input type="password" class="form-control" id="new_password1" name="new_password1">
                      <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="new_password2">Repeat Password</label>
                      <input type="password" class="form-control" id="new_password2" name="new_password2">
                      <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form>
                </div>

                <div class="tab-pane" id="settings">
                  <?= $this->session->flashdata('message'); ?>
                  <?= form_open_multipart('user/edit'); ?>
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" readonly value="<?= $user['username']; ?>">
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user['email']; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Name" value="<?= $user['nama_user']; ?>">
                      <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <select name="jk" id="jk" class="form-control" required>
                        <option value="<?= $user['jenis_kelamin']; ?>"><?= $user['jenis_kelamin']; ?></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                      <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Experience" value="<?= $user['tempat_lahir']; ?>"></input>
                      <?= form_error('tempatLahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tglLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="tglLahir" name="tglLahir" placeholder="Tanggal Lahir" value="<?= $user['tanggal_lahir']; ?>">
                      <?= form_error('tglLahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat"><?= $user['alamat']; ?></textarea>
                      <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="noHp" class="col-sm-2 col-form-label">Nomor Hp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="noHp" name="noHp" placeholder="Nomor Hp" value="<?= $user['no_hp']; ?>">
                      <?= form_error('noHp', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-sm-3">
                          <img src="<?= base_url('assets/img/') . $user['foto'] ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                            <label for="foto" class="custom-file-label">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Edit</button>
                    </div>
                  </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>