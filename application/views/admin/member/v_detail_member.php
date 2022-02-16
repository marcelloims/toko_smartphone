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
                            <h1>Detail Customer</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container">
                    <div class="info-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">ID Customer</label>
                                    <input type="text" name="id_member" class="form-control" id="idUser" placeholder="ID Member" value="<?= $detail['id_user'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="">Nama Customer</label>
                                    <input type="text" name="nama_member" class="form-control" id="idUser" placeholder="Nama Member" value="<?= $detail['nama_user'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Telepon" value="<?= $detail['telepon'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= $detail['email'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?= $detail['username'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" name="password" class="form-control" id="password" placeholder="Password" value="<?= $detail['password'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" readonly><?= $detail['alamat'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="<?= base_url('admin/c_admin/data_member') ?>" class="btn btn-danger float-right mb-5">Kembali</a>
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