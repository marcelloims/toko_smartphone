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
                            <h1>Data Type</h1>
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
                        <i class="fas fa-plus"> Data Type</i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Type</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('admin/c_admin/tambah_type') ?>" method="POST">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="">Nama Jenis</label>
                                                    <input type="text" name="nama_type" class="form-control" id="namaType" placeholder="Nama Type">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="">Keterangan Jenis</label>
                                                    <input type="text" name="keterangan_type" class="form-control" placeholder="Keterangan Type">
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
                            <table id="example1" class="table table-hover">
                                <thead>
                                    <tr align="center">
                                        <th scope="col">#</th>
                                        <th scope="col">Kode Type</th>
                                        <th scope="col">Nama Type</th>
                                        <th scope="col">Keterangan Type</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($type as $ten) : ?>
                                        <tr>
                                            <td align="center"><b><?= $no++ ?></b></td>
                                            <td align="center"><?= $ten->kode_jenis ?></td>
                                            <td align="center"><?= $ten->nama_jenis ?></td>
                                            <td><?= $ten->keterangan_jenis ?></td>
                                            <td align="center">
                                                <a href="<?= base_url('admin/c_admin/edit_type/' . $ten->kode_jenis) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                <a href="<?= base_url('admin/c_admin/hapus_type/' . $ten->kode_jenis) ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
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
        const simpanType = $('.flash-data').data('flashdata');
        // console.log(simpanMember);
        if (simpanType) {
            Swal.fire({
                title: 'Data Type',
                text: simpanType,
                icon: 'success'
            })
        }

        // Sweet Alert 2 Hapus Data Member
        $('.tombol-hapus').on('click', function(e) {

            e.preventDefault();
            const hapus = $(this).attr('href')

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data Jenis akan di HAPUS!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus Data Jenis!',
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