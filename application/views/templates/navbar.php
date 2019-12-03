<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('welcome') ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('welcome/about'); ?>" class="nav-link">About</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('welcome/feedback'); ?>" class="nav-link">Feedback</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url('welcome/guide'); ?>" class="nav-link">Guide</a>
        </li>
        <li class="nav-item dropdown">
            <div class="user-block" data-toggle="dropdown" href="#">
                <img class="img-circle" src="<?php echo base_url(); ?>assets/img/foto.jpg" alt="User Image">
            </div>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="col-md-12">
                    <div class="card card-widget widget-user">
                        <div class="widget-user-header bg-info">
                            <br>
                            <h5 class="widget-user-desc">Ridho</h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="<?php echo base_url(); ?>assets/img/foto.jpg" alt="User Image">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-6 border-right">
                                    <div class="description-block">
                                        <a class="btn btn-block btn-outline-primary" href="<?= base_url('user/profil'); ?>">Profil</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="description-block">
                                        <button type="button" class="btn btn-block btn-outline-primary" href=" <?= base_url('auth/keluar'); ?>" data-toggle="modal" data-target="#logoutModal">Keluar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>