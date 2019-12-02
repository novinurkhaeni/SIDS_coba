        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('user') ?>" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="<?= base_url('welcome/about'); ?>" class="nav-link">About</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('welcome/feedback'); ?>" class="nav-link">Feedback</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url('welcome/guide'); ?>" class="nav-link">Guide</a>
                </li>
                <li class="nav-item dropdown show">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                        <?php
                        $query = $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')));
                        ?>
                        <?php foreach ($query->result() as $value) { ?>
                            <div class="image">
                                <?php if ($value->foto == '') { ?>
                                    <img src="<?php echo base_url(); ?>assets/img/pp.jpg" class="img-profile rounded-circle" alt="User Image">
                                <?php } else { ?>
                                    <img src="<?php echo base_url('assets/img/' . $value->foto); ?>" class="img-profile rounded-circle" alt="User Image">
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama_user'); ?>tuh kan aku ngga bisa bikin session</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right show">
                        <span class="dropdown-item dropdown-header"><?php echo $this->session->userdata('nama_user'); ?>aduh sessionnya ngga muncul :D</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            My Profile
                        </a>
                        <a class="dropdown-item" href="<?= base_url('auth/keluar'); ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Keluar
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->