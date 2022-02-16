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
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <?php if ($detail['kategori'] != 3) : ?>
                        <form action="<?= base_url('customer/c_customer/add_to_cart/' . $detail['kode_produk']) ?>" method="POST">
                            <br>
                            <div class="card card-solid">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="col-12">
                                                <img src="<?= base_url('uploads/' . $detail['gambar']) ?>" class="product-image" alt="Product Image">
                                            </div>
                                            <div class="col-12 product-image-thumbs">
                                                <div class="product-image-thumb active"><img src="<?= base_url('uploads/' . $detail['gambar']) ?>" alt="Product Image"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <h3 class="my-3"><?= $detail['nama_produk'] ?></h3>
                                            <hr>
                                            <table class="table">
                                                <tr align="center">
                                                    <th>Unit</th>
                                                    <th>Type</th>
                                                    <th>Category</th>
                                                </tr>
                                                <tr align="center">
                                                    <td><?= $detail['nama_unit'] ?> || <?= $detail['keterangan_unit'] ?></td>
                                                    <td><?= $detail['nama_jenis'] ?> || <?= $detail['keterangan_jenis'] ?></td>
                                                    <td><?= $detail['nama_kategori'] ?> || <?= $detail['keterangan_kategori'] ?></td>
                                                </tr>
                                            </table>
                                            </p>
                                            <div class="row">
                                                <!-- <div class="col-3">
                                                    <label for="">Size</label>
                                                    <select name="size" id="size" class="form-control" required>
                                                        <option value="" selected disabled>Choose</option>
                                                        <option value="S (Small)">S (Small)</option>
                                                        <option value="M (Medium)">M (Medium)</option>
                                                        <option value="L (Lerge)">L (Lerge)</option>
                                                        <option value="XL (Xtra Lerge)">XL (Xtra Lerge)</option>
                                                    </select>
                                                </div> -->
                                                <div class="col-3">
                                                    <label for="">Qty</label>
                                                    <input type="number" min="1" name="qty" class="form-control" placeholder="Qty" required>
                                                    <input type="number" hidden name="berat" class="form-control" value="<?= $detail['berat'] ?>">
                                                </div>
                                            </div>
                                            <div class="bg-gray py-2 px-3 mt-4">
                                                <h2 class="mb-0">
                                                    Rp. <?= number_format($detail['harga'], 0, ',', '.') ?>
                                                    <!-- <img src="<?= base_url('customer/c_customer/qrcode/' . $detail['kode_produk']); ?>" alt=""> -->
                                                </h2>
                                                <h4 class="mt-0">
                                                    <small>Ex Tax : Include</small>

                                                </h4>
                                            </div>
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary btn-lg btn-flat">
                                                    <i class="fas fa-cart-plus fa-lg mr-2"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php else : ?>
                        <form action="<?= base_url('customer/c_customer/add_to_cart/' . $detail['kode_produk']) ?>" method="POST">
                            <br>
                            <div class="card card-solid">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="col-12">
                                                <img src="<?= base_url('uploads/' . $detail['gambar']) ?>" class="product-image" alt="Product Image">
                                            </div>
                                            <div class="col-12 product-image-thumbs">
                                                <div class="product-image-thumb active"><img src="<?= base_url('uploads/' . $detail['gambar']) ?>" alt="Product Image"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <h3 class="my-3"><?= $detail['nama_produk'] ?></h3>
                                            <hr>
                                            <table class="table">
                                                <tr align="center">
                                                    <th>Unit</th>
                                                    <th>Type</th>
                                                    <th>Category</th>
                                                </tr>
                                                <tr align="center">
                                                    <td><?= $detail['nama_unit'] ?> || <?= $detail['keterangan_unit'] ?></td>
                                                    <td><?= $detail['nama_jenis'] ?> || <?= $detail['keterangan_jenis'] ?></td>
                                                    <td><?= $detail['nama_kategori'] ?> || <?= $detail['keterangan_kategori'] ?></td>
                                                </tr>
                                            </table>
                                            </p>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="">Size</label>
                                                    <select name="size" id="size" class="form-control" required>
                                                        <option value="" selected disabled>Choose</option>
                                                        <option value="S (Small)">S (Small)</option>
                                                        <option value="M (Medium)">M (Medium)</option>
                                                        <option value="L (Lerge)">L (Lerge)</option>
                                                        <option value="XL (Xtra Lerge)">XL (Xtra Lerge)</option>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">Qty</label>
                                                    <input type="number" min="1" name="qty" class="form-control" placeholder="Qty" required>
                                                </div>
                                            </div>
                                            <div class="bg-gray py-2 px-3 mt-4">
                                                <h2 class="mb-0">
                                                    Rp. <?= number_format($detail['harga'], 0, ',', '.') ?>
                                                </h2>
                                                <h4 class="mt-0">
                                                    <small>Ex Tax : Include</small>
                                                </h4>
                                            </div>
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary btn-lg btn-flat">
                                                    <i class="fas fa-cart-plus fa-lg mr-2"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php endif; ?>
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

        </script>
</body>

</html>