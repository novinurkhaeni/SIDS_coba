<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="<?php echo base_url('assets/dist/img/kkp.png'); ?>" style="width: 150px">
                                <h5 class="h5 text-gray-900 mt-2 mb-4">Login Page</h5>
                            </div>

                            <?= $this->session->flashdata('message'); ?>
                            <!--memanggil &menampilkan message flash data-->

                            <form class="user" method="post" action="<?= base_url('auth/daftar'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Enter nama..." value="<?= set_value('nama_user'); ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="">Laki-laki</option>
                                        <option value="">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir..." value="<?= set_value('tempat_lahir'); ?>">
                                    <?= form_error('tempatLahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id="tglLahir" name="tglLahir" placeholder="Tanggal Lahir..." value="<?= set_value('tanggal_lahir'); ?>">
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
                                    <input type="text" class="form-control form-control-user" id="password" name="password" placeholder="password...">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="repeat password">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                            </form>
                            <hr>
                            <a href="<?= base_url('welcome') ?>" class="btn btn-danger btn-user btn-block">Batal</a>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/lupapassword') ?>">Lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth') ?>">Sudah Punya Akun</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>