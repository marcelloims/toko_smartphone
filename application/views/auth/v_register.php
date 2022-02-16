<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PhonePedia</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="<?= base_url() ?>assets/index2.html"><b>Phone</b>Pedia</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="<?= base_url('c_auth/register_member') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="nama_user" class="form-control" required placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" required placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="alamat" class="form-control" required placeholder="Alamat">
                        <div class="input-group-append">
                            <div class="input-group-text">

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="telepon" class="form-control" required placeholder="Telepon">
                        <div class="input-group-append">
                            <div class="input-group-text">

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" required placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" required placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <a href="<?= base_url('c_auth/login') ?>" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // const simpanKategori = $('.flash-data').data('flashdata');
        // // console.log(simpanMember);
        // if (simpanKategori) {
        //     Swal.fire({
        //         title: 'Data Categories',
        //         text: simpanKategori,
        //         icon: 'success'
        //     })
        // }
    </script>
</body>

</html>