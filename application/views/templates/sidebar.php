        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url('welcome'); ?>" class="brand-link">
                <img src="<?= base_url('assets/'); ?>dist/img/kkp.jpg" alt="KKP Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-dark">SATELLITE IMAGERY</span>
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
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Shapefile
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="color:white;">
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
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Filter Kriteria
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="color:white;">
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
                                <button type="button" class="btn btn-default waves-effect right  mb-3"><b>RESULT</b></button>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Dataset
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="color:white;">
                                <li class="nav-item">
                                    <form method="post" action="/Tests/Post/">
                                        <h5>Aqua Modis</h5>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="aqua1" value="">
                                                <label for="aqua1" class="custom-control-label">Sea Surface Temperature</label>
                                            </div>
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="aqua2" checked="">
                                                <label for="aqua2" class="custom-control-label">Chlorophyll-a</label>
                                            </div>
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="aqua3">
                                                <label for="aqua3" class="custom-control-label">Photosynthetically Available Radiation</label>
                                            </div>
                                        </div>
                                        <h5>Terra Modis</h5>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="terra1" value="">
                                                <label for="terra1" class="custom-control-label">Sea Surface Temperature</label>
                                            </div>
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="terra2" checked="">
                                                <label for="terra2" class="custom-control-label">Chlorophyll-a</label>
                                            </div>
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="terra3">
                                                <label for="terra3" class="custom-control-label">Photosynthetically Available Radiation</label>
                                            </div>
                                        </div>
                                        <h5>VIIRS-SNPP</h5>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="snpp1" value="">
                                                <label for="snpp1" class="custom-control-label">Sea Surface Temperature</label>
                                            </div>
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="snpp2" checked="">
                                                <label for="snpp2" class="custom-control-label">Chlorophyll-a</label>
                                            </div>
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="snpp3">
                                                <label for="snpp3" class="custom-control-label">Photosynthetically Available Radiation</label>
                                            </div>
                                        </div>
                                        <h5>MODIS-VIIRS Mozaic</h5>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="mozaic1" value="">
                                                <label for="mozaic1" class="custom-control-label">Sea Surface Temperature</label>
                                            </div>
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="mozaic2" checked="">
                                                <label for="mozaic2" class="custom-control-label">Chlorophyll-a</label>
                                            </div>
                                            <div class="custom-control custom-checkbox" style="font-size:9pt;">
                                                <input class="custom-control-input" type="checkbox" id="mozaic3">
                                                <label for="mozaic3" class="custom-control-label">Photosynthetically Available Radiation</label>
                                            </div>
                                        </div>
                                        <input type="submit" value="Result" class="btn btn-default waves-effect right mb-3" />
                                    </form>
                                    <!-- <form class="form-inline mt-1">
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
                                    <button type="button" class="btn btn-default waves-effect right"><b>RESULT</b></button> -->
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Pages
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('user') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Home</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('user/about'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>About</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('user/feedback'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Feedback</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('user/guide'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Guide</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/project_add.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Download</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/project_edit.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profil Brol</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/project_detail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Metadata</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('user/profil'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profil</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('auth/keluar'); ?>" class="nav-link" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <p>Keluar</p>
                                    </a>
                                </li>
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
        </aside>
        <!-- <div class="card card-primary card-tabs">
            <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Degree Minute Second</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Decimal</a>
                        </li>
                    </ul>
                </div> -->
        <!-- <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab"> -->
        <!-- Lorem ipsum dolor sit amet.   -->
        <!-- </div>
                        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </li>
        </ul>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
                <center>
                    <b>Dataset</b>
                </center>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                        <p>UAV</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                        <p>MODIS</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                        <p>Terra MODIS</p>
                    </a>
                </li>

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
                <br>
                <button type="button" class="btn btn-default waves-effect right"><b>RESULT</b></button>
            </ul>
            </ul>
        </li>
        </li>
        </ul>
        </nav>
        </div>
        </aside> -->