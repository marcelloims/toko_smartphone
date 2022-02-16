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
                            <h1>Data Customer</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container">

                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus"> Data Customer</i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Customer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('admin/c_admin/tambah_member') ?>" method="POST">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="">Nama Customer</label>
                                                    <input type="text" name="nama_member" class="form-control" id="idUser" placeholder="Nama Member">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="">Telepon</label>
                                                    <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Telepon">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="">Username</label>
                                                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Alamat</label>
                                                    <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr align="center">
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Telepon</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">QR</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($member as $mbr) : ?>
                                        <tr>
                                            <td scope="row" align="center"><b><?= $no++ ?></b></td>
                                            <td><?= $mbr->id_user ?></td>
                                            <td><?= $mbr->nama_user ?></td>
                                            <td><?= $mbr->telepon ?></td>
                                            <td><?= $mbr->email ?></td>
                                            <td><img src="<?= base_url('admin/c_admin/qrcode/' . $mbr->nama_user); ?>" alt=""></td>
                                            <td align="center" width="105px">
                                                <a href="<?= base_url('admin/c_admin/detail_member/' . $mbr->id_user) ?>" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
                                                <a href="<?= base_url('admin/c_admin/edit_member/' . $mbr->id_user) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                <a href="<?= base_url('admin/c_admin/hapus_member/' . $mbr->id_user) ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
        const simpanMember = $('.flash-data').data('flashdata');
        // console.log(simpanMember);
        if (simpanMember) {
            Swal.fire({
                title: 'Data Customer',
                text: simpanMember,
                icon: 'success'
            })
        }

        // Sweet Alert 2 Hapus Data Member
        $('.tombol-hapus').on('click', function(e) {

            e.preventDefault();
            const hapus = $(this).attr('href')

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data Customer akan di HAPUS!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus Data Customer!',
                cancelButtonText: 'Tidak, batalkan'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = hapus
                }
            })

        })
    </script>
    <!-- jQuery -->
</body>

</html>