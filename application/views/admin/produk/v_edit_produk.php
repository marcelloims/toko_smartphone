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
                            <h1>Form Ubah Produk</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container">
                    <div class="info-box">
                        <form action="<?= base_url('admin/c_admin/update_produk') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <img name="gambar" src="<?= base_url('uploads/' . $edit['gambar']) ?>" alt="..." class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Kode Produk</label>
                                                <input type="text" name="kode_produk" value="<?= $edit['kode_produk'] ?>" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Nama Produk</label>
                                                <input type="text" name="nama_produk" value="<?= $edit['nama_produk'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Harga</label>
                                                <input type="text" name="harga" value="<?= $edit['harga'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Qty</label>
                                                <input type="text" name="qty" value="<?= $edit['qty'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">ID Pemilik</label>
                                                <select name="id_pemilik" class="form-control">
                                                    <option selected disabled>-Silahkan Pilih</option>
                                                    <?php
                                                    foreach ($pemilik as $pem) : ?>
                                                        <?php if ($pem->id_user == $edit['id_pemilik']) : ?>
                                                            <option value="<?= $pem->id_user ?>" selected> ID: <?= $pem->id_user ?>|<?= $pem->nama_user ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $pem->id_user ?>">ID: <?= $pem->id_user ?>|<?= $pem->nama_user ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Satuan</label>
                                                <select name="satuan" id="satuan" class="form-control">
                                                    <?php foreach ($satuan as $sat) : ?>
                                                        <?php if ($sat->kode_unit == $edit['satuan']) : ?>
                                                            <option value="<?= $sat->kode_unit ?>" selected><?= $sat->nama_unit ?> || <?= $sat->keterangan_unit ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $sat->kode_unit ?>"><?= $sat->nama_unit ?> || <?= $sat->keterangan_unit ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Jenis</label>
                                                <select name="jenis" id="jenis" class="form-control">
                                                    <?php foreach ($jenis as $jen) : ?>
                                                        <?php if ($jen->kode_jenis == $edit['jenis']) : ?>
                                                            <option value="<?= $jen->kode_jenis ?>" selected>
                                                                <?= $jen->nama_jenis ?> || <?= $jen->keterangan_jenis ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $jen->kode_jenis ?>">
                                                                <?= $jen->nama_jenis ?> || <?= $jen->keterangan_jenis ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Kategori</label>
                                                <select name="kategori" id="kategori" class="form-control">
                                                    <?php foreach ($kategori as $kat) : ?>
                                                        <?php if ($kat->kode_kategori == $edit['kategori']) : ?>
                                                            <option value="<?= $kat->kode_kategori ?>" selected><?= $kat->nama_kategori ?> || <?= $kat->keterangan_kategori ?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $kat->kode_kategori ?>"><?= $kat->nama_kategori ?> || <?= $kat->keterangan_kategori ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Gambar</label>
                                                <input type="file" name="gambar" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Berat</label>
                                                <input type="number" name="berat" class="form-control" value="<?= $edit['berat'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= base_url('admin/c_admin/data_produk') ?>" class="btn btn-danger float-right">Kembali</a>
                            <button type="submit" class="btn btn-success float-right mr-3">Simpan</button>
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