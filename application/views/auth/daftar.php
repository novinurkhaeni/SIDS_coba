<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h3><i class="fas fa-user"></i><b> User Registration</b></h3>
                            </div>
                            <br>
                            <?= $this->session->flashdata('message'); ?>
                            <!--memanggil &menampilkan message flash data-->

                            <form class="user" method="post" action="<?= base_url('auth/daftar'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap..." value="<?= set_value('nama_user'); ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <select name="jk" id="jk" class="form-control" required>
                                        <option value="">Jenis Kelamin</option>
                                        <option value="">Laki-laki</option>
                                        <option value="">Perempuan</option>
                                    </select>
                                    <!-- <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir..." value="<?= set_value('tempat_lahir'); ?>">
                                    <?= form_error('tempatLahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id="tglLahir" name="tglLahir" placeholder="Tanggal Lahir..." value="Tanggal Lahir">
                                    <?= form_error('tglLahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat..." value="<?= set_value('alamat'); ?>">
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nohp" name="nohp" placeholder="nohp..." value="<?= set_value('no_hp'); ?>">
                                    <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="email..." value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="username..." value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="password...">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="repeat password">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                            </form>
                            <hr>
                            <a href="<?= base_url('welcome') ?>" class="btn btn-danger btn-user btn-block">Batal</a>
                            <br>
                            <p class="text-center">---------- OR ----------</p>
                            <div class="text-center">
                                <div class="col-12">
                                    <a class="small-left" href="<?= base_url('auth/forgotpassword') ?>">Lupa Password?</a>
                                    <br>
                                    <a class="small-right" href="<?= base_url('auth') ?>">Sudah Punya Akun</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>