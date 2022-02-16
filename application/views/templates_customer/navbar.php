<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="<?= base_url() ?>assets/dist/img/logo_phonepedia.jpg" alt="PhonePedia" class="brand-image img-circle elevation-2" style="opacity: .8">
            <span class="brand-text font-weight-light"><b>Phone</b>Pedia</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url('customer/c_customer/index') ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('customer/c_customer/data_pesanan') ?>" class="nav-link">Pesanan</a>
                </li>
            </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item mt-2">
                <?php $cart = '<i class="fa fa-shopping-cart" aria-hidden="true"></i> : <b id="cart">' . $this->cart->total_items() . '</b>' . ' items' ?>
                <?= anchor('customer/c_customer/detail_keranjang', $cart) ?>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <img class="brand-image img-circle elevation-2" src="<?= base_url('uploads/' . $this->session->userdata('image')) ?>" alt="User profile picture">
                </a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url('customer/c_customer/edit_akun/' . $this->session->userdata('id_user')) ?>" class="dropdown-item">
                        <i class="fa fa-cog fa-lg" aria-hidden="true"></i> Akun
                    </a>
                    <!-- <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i> Pesanan Saya
                    </a> -->
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url('c_auth/logout') ?>" class="dropdown-item">
                        <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>