<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= base_url() ?>assets/dist/img/logo_phonepedia.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>Phone</b>Pedia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <!-- <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('username') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                    <a href="<?= base_url('admin/c_admin/dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link">
                        <i class="fa fa-database" aria-hidden="true"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/c_admin/data_tenant') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Tenant</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/c_admin/data_member') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/c_admin/data_produk') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Produk</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link">
                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                        <p>
                            Deskripsi Produk
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/c_admin/data_unit') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Satuan Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/c_admin/data_type') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/c_admin/data_kategori') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori Produk</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                        <p>
                            Master Transaksi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/c_admin/data_pesanan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pesanan</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>