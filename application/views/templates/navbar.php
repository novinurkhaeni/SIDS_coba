<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('user') ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('user/about'); ?>" class="nav-link">About</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('user/feedback'); ?>" class="nav-link">Feedback</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('user/guide'); ?>" class="nav-link">Guide</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Download</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Profil Brol</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Metadata</a>
        </li>
        <li class="nav-item dropdown">
            <div class="user-block" data-toggle="dropdown" href="#">
                <img class="img-circle" src="<?= base_url('assets/img/') . $user['foto']; ?>" alt="User Image">
            </div>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="col-md-12">
                    <div class="card card-widget widget-user">
                        <div class="widget-user-header bg-info">
                            <br>
                            <h5 class="widget-user-desc"><?= $user['nama_user']; ?></h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="<?= base_url('assets/img/') . $user['foto']; ?>" alt="User Image">
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