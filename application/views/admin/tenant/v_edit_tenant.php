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
                            <h1>Form Ubah Tenant</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container">
                    <div class="info-box">
                        <form action="<?= base_url('admin/c_admin/update_tenant') ?>" method="POST">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Kode Tenant</label>
                                        <input type="text" name="id_user" class="form-control" id="kodeTenant" placeholder="Kode Tenant" value="<?= $edit['id_user'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="">Nama Tenant</label>
                                        <input type="text" name="nama_user" class="form-control" id="kodeTenant" placeholder="Nama Tenant" value="<?= $edit['nama_user'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Telepon</label>
                                        <input type="text" name="telepon" class="form-control" id="teleponTenant" placeholder="Telepon" value="<?= $edit['telepon'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" id="emailTenant" placeholder="Email" value="<?= $edit['email'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control" id="emailTenant" placeholder="Email" value="<?= $edit['username'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" id="emailTenant" placeholder="Email" value="<?= $edit['password'] ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <textarea name="alamat" id="alamatTenant" cols="30" rows="5" class="form-control"><?= $edit['alamat'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="<?= base_url('admin/c_admin/data_tenant') ?>" class="btn btn-danger float-right mb-5">Kembali</a>
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