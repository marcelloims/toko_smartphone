<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <?php $this->load->view('templates_customer/header') ?>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('templates_customer/navbar') ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-6 bg-white mt-3 mb-3">
                    <div class="container">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url('assets/dist/img/Iphone13series.jpg') ?>" class="d-block w-100 img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('assets/dist/img/S21series.jpg') ?>" class="d-block w-100 img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('assets/dist/img/Vivo_smg.jpg') ?>" class="d-block w-100 img-fluid" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 bg-white">
                    <div class="row">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-6 col-sm-6 mt-3">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= base_url('assets/dist/img/a95_new.jpg') ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/dist/img/poco_new.jpg') ?>" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <img src="<?= base_url('assets/dist/img/redmifs.jpg') ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <img src="<?= base_url('assets/dist/img/redmi9fs.jpg') ?>" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="small-box bg-white">
                        <div class="inner">
                            <h4>Kategori</h4>
                            <hr>
                            <div class="row justify-content-center">
                                <div class="col-lg-1 col-2 col-sm-1 col-md-1 mr-2 text-center">
                                    <a href="<?= base_url('customer/c_customer/samsung') ?>">
                                        <img src="<?= base_url('assets/dist/img/Samsung_logo.jpg') ?>" alt="..." class="img-thumbnail">
                                        <span class="badge text-wrap" style="color: black;">Samsung</span>
                                    </a>
                                </div>
                                <div class="col-lg-1 col-2 col-sm-1 col-md-1 mr-2 text-center">
                                    <a href="<?= base_url('customer/c_customer/apple') ?>">
                                        <img src="<?= base_url('assets/dist/img/Apple_logo.jpg') ?>" alt="..." class="img-thumbnail">
                                        <span class="badge text-wrap" style="color: black;">Apple</span>
                                    </a>
                                </div>
                                <div class="col-lg-1 col-2 col-sm-1 col-md-1 mr-2 text-center">
                                    <a href="<?= base_url('customer/c_customer/xiaomi') ?>">
                                        <img src="<?= base_url('assets/dist/img/Xiaomi_logo.jpg') ?>" alt="..." class="img-thumbnail">
                                        <span class="badge text-wrap" style="color: black;">Xiaomi</span>
                                    </a>
                                </div>
                                <div class="col-lg-1 col-2 col-sm-1 col-md-1 mr-2 text-center">
                                    <a href="<?= base_url('customer/c_customer/realme') ?>">
                                        <img src="<?= base_url('assets/dist/img/Realme_logo.jpg') ?>" alt="..." class="img-thumbnail">
                                        <span class="badge text-wrap" style="color: black;">Realme</span>
                                    </a>
                                </div>
                                <div class="col-lg-1 col-2 col-sm-1 col-md-1 mr-2 text-center">
                                    <a href="<?= base_url('customer/c_customer/poco') ?>">
                                        <img src="<?= base_url('assets/dist/img/Poco_logo.jpg') ?>" alt="..." class="img-thumbnail">
                                        <span class="badge text-wrap" style="color:black;">Poco</span>
                                    </a>
                                </div>
                                <div class="col-lg-1 col-2 col-sm-1 col-md-1 mr-2 text-center">
                                    <a href="<?= base_url('customer/c_customer/oppo') ?>">
                                        <img src="<?= base_url('assets/dist/img/Oppo_logo.jpg') ?>" alt="..." class="img-thumbnail">
                                        <span class="badge text-wrap" style="color:black;">Oppo</span>
                                    </a>
                                </div>
                                <div class="col-lg-1 col-2 col-sm-1 col-md-1 mr-2 text-center">
                                    <a href="<?= base_url('customer/c_customer/vivo') ?>">
                                        <img src="<?= base_url('assets/dist/img/Vivo_logo.jpg') ?>" alt="..." class="img-thumbnail">
                                        <span class="badge text-wrap" style="color:black;">Vivo</span>
                                    </a>
                                </div>
                                <div class="col-lg-1 col-2 col-sm-1 col-md-1 mr-2 text-center">
                                    <a href="<?= base_url('customer/c_customer/sony') ?>">
                                        <img src="<?= base_url('assets/dist/img/Sony_logo.jpg') ?>" alt="..." class="img-thumbnail">
                                        <span class="badge text-wrap" style="color:black;">Sony</span>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <div class="update-akun" data-flashdata="<?= $this->session->flashdata('update_akun') ?>"></div>
            <div class="tambah-keranjang" data-flashdata="<?= $this->session->flashdata('tambah_keranjang') ?>"></div>
            <div class="hapus-keranjang" data-flashdata="<?= $this->session->flashdata('hapus_keranjang') ?>"></div>
            <div class="order" data-flashdata="<?= $this->session->flashdata('order') ?>"></div>

            <div class="content-wrapper">
                <!-- Main content -->
                <div class="content">
                    <div class="container">

                        <div class="row justify-content-center">
                            <br>
                            <?php foreach ($produk as $pro) : ?>
                                <a href="<?= base_url("customer/c_customer/detail_produk/" . $pro->kode_produk) ?>">
                                    <div class="card mt-4 mr-4" style="width: 12rem; height: 16rem;">
                                        <div class="card-body text-center">
                                            <img src="<?= base_url("uploads/" . $pro->gambar) ?>" class="img-thumbnail" alt="...">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="text-gray-dark text-wrap badge"><?= $pro->nama_produk ?></span>
                                                </div>
                                                <br><br>
                                                <div class="col-12">
                                                    <span class="font-weight-bold">Rp. <?= number_format($pro->harga, 0, ",", ".") ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <div class="row justify-content-center">
                            <?= $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <?php $this->load->view('templates_customer/footer') ?>
        <!-- Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php $this->load->view('templates_customer/js') ?>
    <script>
        const updateAkun = $('.update-akun').data('flashdata');
        if (updateAkun) {
            Swal.fire({
                title: 'Profil Anda',
                text: updateAkun,
                icon: 'success'
            })
        }

        const tambahKeranjang = $('.tambah-keranjang').data('flashdata');
        if (tambahKeranjang) {
            Swal.fire({
                title: 'Keranjang Anda',
                text: tambahKeranjang,
                icon: 'success'
            })
        }

        const hapusKeranjang = $('.hapus-keranjang').data('flashdata');
        if (hapusKeranjang) {
            Swal.fire({
                title: 'Keranjang Anda',
                text: hapusKeranjang,
                icon: 'success'
            })
        }

        const order = $('.order').data('flashdata');
        if (order) {
            Swal.fire({
                title: 'Selamat! Anda berhasil belanja',
                text: order,
                icon: 'success'
            })
        }
    </script>
</body>

</html>