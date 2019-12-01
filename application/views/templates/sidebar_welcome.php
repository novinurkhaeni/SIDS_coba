        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url('welcome'); ?>" class="brand-link">
                <img src="<?= base_url('assets/'); ?>dist/img/kkp.jpg" alt="KKP Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-dark">SATELIT IMAGERY</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                           <center class="nav-header center"><b>LAYER MENU</b></center>
                           <li class="nav-item has-treeview">
                            <a href="#" class="nav-link active">
                                <!-- <i class="nav-icon fas fa-folder"></i> -->
                                <center>
                                    <b>Shapefile</b>
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </center>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Shapefile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Filter criteria</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dataset</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link active">
                                <!-- <i class="nav-icon fas fa-folder"></i> -->
                                <center>
                                    <b>Filter Kriteria</b>
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </center>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Shapefile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Filter criteria</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dataset</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link active">
                                <!-- <i class="nav-icon fas fa-folder"></i> -->
                                <center>
                                    <b>Dataset</b>
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </center>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Shapefile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Filter criteria</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dataset</p>
                                    </a>
                                </li>
                                <form class="form-inline mt-1">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control form-control-navbar" type="search" placeholder="criteria summary" aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-navbar" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <button type="button" class="btn btn-default waves-effect right"><b>RESULT</b></button>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <hr>
                <div class="card" style="width: 14,5rem;">
                  <div class="card-body">
                    <h5 class="card-title">Satellite Imagery Catalog</h5>
                    <br>
                    <p class="center">provides seamless access to IMRO Research and monitoring oceanography data. Users have the ability to search, browse, ore use a map-based interface to discover data.</p>
                </div>
            </div>

            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
