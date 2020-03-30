<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <ul class="m-0 p-0">
                    <a class="nav-link" href="<?php echo site_url('admin') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Produk
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo site_url('admin/products') ?>">Daftar Produk</a>
                            <a class="nav-link" href="<?php echo site_url('admin/products/add') ?>">Tambah Produk</a>
                        </nav>
                    </div>
                    
                    
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Pengguna
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Pengaturan
                    </a>
                </ul>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>

<!-- 
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <ul class="sidebar navbar-nav">
                    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
                        <a class="nav-link" href="<?php echo site_url('admin') ?>">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            <span>Overview</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-fw fa-boxes mr-2"></i>
                            <span>Products</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">New Product</a>
                            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">List Product</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-fw fa-users mr-2"></i>
                            <span>Users</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-fw fa-cog mr-2"></i>
                            <span>Settings</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div> -->