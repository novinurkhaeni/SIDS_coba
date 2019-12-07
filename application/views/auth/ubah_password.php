<div class="row justify-content-center">
    <div class="col-lg-3">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="card-body login-card-body">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900">Change Password For</h1>
                            <h5 class="mb-4"><?= $this->session->userdata('reset_email'); ?></h5>
                        </div>

                        <form class="user" method="post" action="<?= base_url('auth/ubahpassword'); ?>">
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Enter new password..." value="<?= set_value('email'); ?>">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat new password..." value="<?= set_value('email'); ?>">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Change Password
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>