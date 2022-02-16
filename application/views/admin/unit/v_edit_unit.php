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
                            <h1>Form Ubah Unit</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container">
                    <div class="info-box">
                        <form action="<?= base_url('admin/c_admin/update_unit') ?>" method="POST">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Kode Unit</label>
                                        <input type="text" name="kode_unit" class="form-control" id="kodeUnit" placeholder="Kode Unit" value="<?= $edit['kode_unit'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Nama Unit</label>
                                        <input type="text" name="nama_unit" class="form-control" id="kodeUnit" placeholder="Nama Unit" value="<?= $edit['nama_unit'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Keterangan Unit</label>
                                        <input type="text" name="keterangan_unit" class="form-control" id="keteranganUnit" placeholder="Keterangan" value="<?= $edit['keterangan_unit'] ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="<?= base_url('admin/c_admin/data_unit') ?>" class="btn btn-danger float-right mb-5">Kembali</a>
                                    <button type="submit" class="btn btn-success float-right mr-3">Simpan</button>
                                </div>
                            </div>
                        </form>
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