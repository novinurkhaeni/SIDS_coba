<div class="row justify-content-center">
    <div class="col-lg-3">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <!-- <img src="<?php echo base_url('assets/dist/img/kkp.png'); ?>" style="width: 150px"> -->
                                <!-- <h5 class="h5 text-gray-9000 mt-2 mb-4"><b>Sign In</b></h5> -->
                                <h3><b>Sign In</b></h3>
                            </div>
                            <br>
                            <?= $this->session->flashdata('message'); ?>
                            <!--memanggil &menampilkan message flash data-->

                            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Enter Username..." value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                            </form>
                            <hr>
                            <a href="<?= base_url('welcome') ?>" class="btn btn-danger btn-user btn-block">Batal</a>
                            <br>
                            <p class="text-center">---------- OR ----------</p>
                            <div class="text-center">
                                <div class="col-12">
                                    <a class="small-left" href="<?= base_url('auth/forgotpassword') ?>">Forgot Password?</a>
                                    <br>
                                    <a class="small-right" href="<?= base_url('auth/daftar') ?>">Create New Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>