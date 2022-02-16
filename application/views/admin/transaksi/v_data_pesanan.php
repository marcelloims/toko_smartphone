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
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-hover">
                                <thead>
                                    <tr align="center">
                                        <th>No</th>
                                        <th>Invoice</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Tgl Transaksi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pesanan as $psn) : ?>
                                        <tr>
                                            <td align="center"><?= $no++ ?></td>
                                            <td align="center"><?= $psn->no_transaksi ?></td>
                                            <td><?= $psn->nama_pelanggan ?></td>
                                            <td align="center"><?= $psn->tanggal_transaksi ?></td>
                                            <td align="center"><?= $psn->status ?></td>
                                            <td align="center">
                                                <a href="<?= base_url('admin/c_admin/detail_pesanan/' . $psn->no_transaksi) ?>" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
                                                <a href="<?= base_url('admin/c_admin/edit_pesanan/' . $psn->no_transaksi) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });


        // Sweet Alert 2 Simpan dan Update Data Member
        const simpanTransaksi = $('.flash-data').data('flashdata');
        // console.log(simpanMember);
        if (simpanTransaksi) {
            Swal.fire({
                title: 'Data Transaksi',
                text: simpanTransaksi,
                icon: 'success'
            })
        }
    </script>
    <!-- jQuery -->
</body>

</html>