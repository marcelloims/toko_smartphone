<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('templates_admin/header') ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('templates_admin/navbar') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('templates_admin/sidebar') ?>
        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Pesanan</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container">
                    <div class="info-box">
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
                                            <th>Nama</th>
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
                                        <tr class="bg-light">
                                            <td colspan="4" align="right"><strong>Total Belanja : </strong></td>
                                            <td colspan="2">Rp. <?= number_format($grand_total, 0, ',', '.') ?></td>
                                        </tr>
                                        <tr class="bg-light">
                                            <td colspan="4" align="right"><strong>Ongkir : </strong></td>
                                            <td colspan="2">Rp. <?= number_format($items['ongkir'], 0, ',', '.') ?></td>
                                        </tr>
                                        <tr class="bg-light">
                                            <td colspan="4" align="right"><strong>Grand Total : </strong></td>
                                            <td colspan="2">Rp. <?= number_format($grand_total += $items['ongkir'], 0, ',', '.') ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Main content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- /.control-sidebar -->
        <?php $this->load->view('templates_admin/footer') ?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php $this->load->view('templates_admin/js') ?>
    <!-- jQuery -->
</body>

</html>