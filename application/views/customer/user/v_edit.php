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
            <div class="content-wrapper">
                <!-- Main content -->
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <div class="card card-primary card-outline mt-5">
                                <form action="<?= base_url('customer/c_customer/update_akun') ?>" enctype="multipart/form-data" method="POST">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('uploads/' . $user->image) ?>" alt="User profile picture">
                                        </div>

                                        <h3 class="profile-username text-center"><?= $user->nama_user ?></h3>

                                        <p class="text-muted text-center">ID <?= $user->id_user ?></p>

                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <label for="">Nama</label>
                                                <input type="text" class="form-control text-center" name="nama_user" value="<?= $user->nama_user ?>">
                                            </li>
                                            <li class="list-group-item">
                                                <label for="">Alamat</label>
                                                <input type="text" class="form-control text-center" name="alamat" value="<?= $user->alamat ?>">
                                            </li>
                                            <li class="list-group-item">
                                                <label for="">Email</label>
                                                <input type="text" class="form-control text-center" name="email" value="<?= $user->email ?>">
                                            </li>
                                            <li class="list-group-item">
                                                <label for="">Username</label>
                                                <input type="text" class="form-control text-center" name="username" value="<?= $user->username ?>">
                                            </li>
                                            <li class="list-group-item">
                                                <label for="">Foto</label>
                                                <input type="file" class="form-control text-center" name="image" value="<?= $user->username ?>">
                                            </li>
                                        </ul>
                                        <button type="submit" class="btn btn-primary btn-block"><b>Save</b></button>
                                    </div>
                                </form>
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
        const dataKeranjang = $('.flash-data').data('flashdata');
        // console.log(simpanMember);
        if (dataKeranjang) {
            Swal.fire({
                title: 'Data Keranjang',
                text: simpanMember,
                icon: 'success'
            })
        }
    </script>
</body>

</html>