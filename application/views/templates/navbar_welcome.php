        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
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

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('welcome') ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('welcome/about'); ?>" class="nav-link">About</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('auth/blocked'); ?>" class="nav-link">Feedback</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url('welcome/guide'); ?>" class="nav-link">Guide</a>
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
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('auth/daftar') ?>" class="nav-link"><i class="fas fa-user-plus"></i> Daftar</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('auth') ?>" class="nav-link"><i class="fa fa-lock"></i> Login</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->