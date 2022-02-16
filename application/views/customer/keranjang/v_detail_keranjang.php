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
                    <?php if ($this->cart->contents() != NULL) : ?>
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0 text-dark">Keranjang Belanja <i class="fas fa-shopping-cart"></i></h1>
                                </div>
                            </div>
                            <div class="col-lg-12 col-6">
                                <div class="small-box bg-white">
                                    <div class="inner">
                                        <table class="table">
                                            <tr align="center">
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Harga Satuan</th>
                                                <th>Jumlah</th>
                                                <th>Subtotal Produk</th>
                                            </tr>
                                            <?php
                                            $grand_total = 0;
                                            foreach ($this->cart->contents() as $items) : ?>
                                                <tr>
                                                    <td width="100px">
                                                        <img src="<?= base_url('uploads/' . $items['image']) ?>" alt="gambar rusak" class="img-thumbnail">
                                                    </td>
                                                    <td><br><?= $items['name'] ?></td>
                                                    <td><br><?= $items['options']['size'] ?></td>
                                                    <td><br>Rp. <?= number_format($items['price'], 0, ',', '.') ?></td>
                                                    <td align="center"><br>
                                                        <input type="number" width="200px" id="qty" min="1" name="qty" value="<?= number_format($items['qty'], 0, ',', '.') ?>" onchange="update_cart(this.value, '<?= $items['rowid'] ?>')">
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url('customer/c_customer/hapus_items/' . $items['rowid']) ?>" class="btn btn-sm btn-danger float-right"><i class="fas fa-trash"></i></a><br>
                                                        Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?>
                                                    </td>
                                                </tr>
                                            <?php $grand_total += $items['subtotal'];
                                            endforeach; ?>
                                            <tr class="bg-light">
                                                <td colspan="5" align="right">Grand Total :</td>
                                                <td>Rp. <?= number_format($grand_total, 0, ',', '.') ?></td>
                                            </tr>
                                        </table>
                                        <a href="<?= base_url('customer/c_customer/checkout') ?>" class="btn btn-sm btn-success mt-3 mb-3 float-right">Pembayaran</a>
                                        <a href="<?= base_url('customer/c_customer/index') ?>" class="btn btn-sm btn-primary mt-3 mb-3 mr-3 float-right">Lanjut Belanja</a>
                                        <a href="<?= base_url('customer/c_customer/hapus_keranjang') ?>" class="btn btn-sm btn-danger hapus-keranjang mt-3 mr-3 mb-3  float-right">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="container-fluid"><br><br>
                            <div class="alert alert-danger" role="alert">
                                Opps! Keranjang Kamu Kosong! Mari kita belanja..
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Main content -->
            <br>
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
        function update_cart(qty, kodeProduk) {
            $.ajax({
                url: "<?= base_url('customer/c_customer/update_keranjang') ?>",
                type: "POST",
                dataType: "JSON",
                data: {
                    qty: qty,
                    kode: kodeProduk
                },
                success: function(result) {
                    // console.log(result)
                    location.reload()
                }
            })
        }



        $('.hapus-keranjang').on('click', function(e) {
            e.preventDefault();
            const hapus = $(this).attr('href')

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Keranjang anda akan di HAPUS!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus Keranjang!',
                cancelButtonText: 'Tidak, batalkan'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = hapus
                }
            })
        })
    </script>
</body>

</html>