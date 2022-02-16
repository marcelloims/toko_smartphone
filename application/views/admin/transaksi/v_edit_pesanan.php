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
                            <h1>Edit Pesanan</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <form action="<?= base_url('admin/c_admin/update_pesanan') ?>" method="POST">
                        <table class="table">
                            <tr align="center">
                                <th>Invoice</th>
                                <th>Tanggal Transaksi</th>
                                <th>Bank</th>
                                <th>Metode Pembayaran</th>
                                <th>Status</th>
                            </tr>
                            <tr align="center">
                                <td>
                                    <input type="hidden" name="invoice" id="" value="<?= $edit->no_transaksi ?>" readonly>
                                    <?= $edit->no_transaksi ?>
                                </td>
                                <td><?= $edit->tanggal_transaksi ?></td>
                                <td><?= $edit->bank ?></td>
                                <td><?= $edit->metode_pembayaran ?></td>
                                <td>
                                    <select name="status" id="" class="form-control">
                                        <?php foreach ($status as $sta) : ?>
                                            <?php if ($sta == $edit->status) : ?>
                                                <option value="<?= $sta ?>" selected><?= $sta ?></option>
                                            <?php else : ?>
                                                <option value="<?= $sta ?>"><?= $sta ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                        </table>
                        <button type="submit" class="btn btn-info float-right">Update</button>
                    </form>
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