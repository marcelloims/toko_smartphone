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
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12">
                            <h2>Detail Pesanan</h2>
                            <div class="small-box bg-white">
                                <div class="inner">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary float-right mb-3" data-toggle="modal" data-target="#exampleModal">
                                        Bukti Bayar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran Anda</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php if ($pesanan->bukti_bayar != NULL) : ?>
                                                        <img src="<?= base_url('uploads/' . $pesanan->bukti_bayar) ?>" alt="..." class="img-thumbnail">
                                                    <?php else : ?>
                                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                            <strong>Maaf!</strong> Anda Tidak Melakukan Pembayaran dengan metode ini
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <tr align="center">
                                            <th>Invoice</th>
                                            <th>Tanggal Belanja</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Alamat Pengiriman</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Bank</th>
                                        </tr>
                                        <tr align="center">
                                            <td><?= $pesanan->no_transaksi ?></td>
                                            <td><?= $pesanan->tanggal_transaksi ?></td>
                                            <td><?= $pesanan->nama_pelanggan ?></td>
                                            <td><?= $pesanan->alamat_pengiriman ?></td>
                                            <td><?= $pesanan->metode_pembayaran ?></td>
                                            <?php if ($pesanan->bank == NULL) : ?>
                                                <td>-</td>
                                            <?php else : ?>
                                                <td><?= $pesanan->bank ?></td>
                                            <?php endif; ?>
                                        </tr>
                                        <tr align="center">
                                            <th>Produk</th>
                                            <th></th>
                                            <th>Harga Satuan</th>
                                            <th>Jumlah</th>
                                            <th colspan="2">Subtotal Produk</th>
                                        </tr>
                                        <?php
                                        $grand_total = 0;
                                        foreach ($detail as $items) :
                                            $subtotal = $items['qty'] * $items['harga_produk'];
                                            $grand_total += $subtotal;
                                        ?>
                                            <tr align="center">
                                                <td><?= $items['nama_produk'] ?></td>
                                                <td><?= $items['size'] ?></td>
                                                <td>Rp. <?= number_format($items['harga_produk'], 0, ',', '.') ?></td>
                                                <td><?= $items['qty'] ?></td>
                                                <td colspan="2">Rp. <?= number_format($subtotal, 0, ',', '.') ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td colspan="4" align="right">Total Belanja :</td>
                                            <td colspan="2"><?= number_format($grand_total, 0, ',', '.') ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="right">Ongkir :</td>
                                            <td colspan="2"><?= number_format($items['ongkir'], 0, ',', '.') ?></td>
                                        </tr>
                                        <tr class="bg-light">
                                            <td colspan="4" align="right">Grand Total :</td>
                                            <td colspan="2">Rp. <?= number_format($grand_total += $items['ongkir'], 0, ',', '.') ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
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

    </script>
</body>

</html>