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
                                <center>
                                    <b>Shapefile</b>
                                </center>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                        <p>Fisheries Management Area</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                        <p>Coastline</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                        <p>Major River </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link active">
                                <center>
                                    <b>Filter Kriteria</b>
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
            </div>
        </aside>
        <div class="card card-primary card-tabs">
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
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                            <!-- Lorem ipsum dolor sit amet.   -->
                        </div>
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
        </aside>