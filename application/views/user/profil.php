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

          <!-- Profile Image -->
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
                <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Kirim Pesan</a></li> -->
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="ubahPassword">
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
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                  <!-- The timeline -->
                  <div class="timeline timeline-inverse">
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-danger">
                        10 Feb. 2014
                      </span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-envelope bg-primary"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 12:05</span>

                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                        <div class="timeline-body">
                          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                          weebly ning heekya handango imeem plugg dopplr jibjab, movity
                          jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                          quora plaxo ideeli hulu weebly balihoo...
                        </div>
                        <div class="timeline-footer">
                          <a href="#" class="btn btn-primary btn-sm">Read more</a>
                          <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-user bg-info"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                        <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                        </h3>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-comments bg-warning"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                        <div class="timeline-body">
                          Take me to your leader!
                          Switzerland is small and neutral!
                          We are more like Germany, ambitious and misunderstood!
                        </div>
                        <div class="timeline-footer">
                          <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-success">
                        3 Jan. 2014
                      </span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-camera bg-purple"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                        <div class="timeline-body">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <div>
                      <i class="far fa-clock bg-gray"></i>
                    </div>
                  </div>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                  <form class="form-horizontal" method="post" action="<?= base_url('user/edit'); ?>">
                    <div class="form-group row">
                      <label for="username" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" placeholder="Username" value="<?= $user['username']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" placeholder="Email" value="<?= $user['email']; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="Name" value="<?= $user['nama_user']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <select name="jk" id="jk" class="form-control" required>
                          <option value=""><?= $user['jenis_kelamin']; ?></option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="tempatLahir" placeholder="Experience" value="<?= $user['tempat_lahir']; ?>"></input>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" value="<?= $user['tanggal_lahir']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="alamat" placeholder="Alamat"><?= $user['alamat']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="no_hp" class="col-sm-2 col-form-label">Nomor Hp</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_hp" placeholder="Nomor Hp" value="<?= $user['no_hp']; ?>">
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
                              <label for="foto" class="custom-file-label">Pilih file</label>
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