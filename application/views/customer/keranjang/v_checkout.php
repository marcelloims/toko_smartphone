<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <?php $this->load->view('templates_customer/header') ?>
</head>

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "key: bcd91342ee0d1c4b83b3e49fbf3b133c"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $provinsi = json_decode($response, true);
    // var_dump($provinsi['rajaongkir']['status']['code']);
    // var_dump($provinsi['rajaongkir']['results']);
}
?>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('templates_customer/navbar') ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="container-fluid">


                        <form method="POST" enctype="multipart/form-data">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0 text-dark">Checkout</h1>
                                    <?php //var_dump($ongkir) 
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-6">
                                <h3>Alamat Pengiriman</h3>
                                <div class="small-box bg-light">
                                    <div class="inner">
                                        <div class="row">
                                            <select hidden name="provinsi" id="provinsi" class="form-control">
                                                <option value="1">Bali</option>
                                            </select>
                                            <select hidden name="kota" id="kota" class="form-control">
                                                <option value="114">Denpasar</option>
                                            </select>
                                            <div class="col-lg-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Provinsi</label>
                                                    <select name="provinsi_penerima" id="provinsi_penerima" class="form-control" required>
                                                        <option>--Pilih--</option>
                                                        <?php if ($provinsi['rajaongkir']['status']['code'] == 200) : ?>
                                                            <?php foreach ($provinsi['rajaongkir']['results'] as $prov) : ?>
                                                                <?php if ($prov['province_id'] == $this->input->post('provinsi_penerima')) : ?>
                                                                    <option value="<?= $prov['province_id'] ?>" selected><?= $prov['province'] ?></option>
                                                                <?php else : ?>
                                                                    <option value="<?= $prov['province_id'] ?>"><?= $prov['province'] ?></option>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Kabupaten</label>
                                                    <select name="kota_penerima" id="kota_penerima" class="form-control">
                                                        <option>--Pilih Provinsi Dahulu--</option>
                                                        <?php
                                                        if (count($_POST)) {
                                                            $curl = curl_init();

                                                            curl_setopt_array($curl, array(
                                                                CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=" . $this->input->post('provinsi_penerima'),
                                                                CURLOPT_RETURNTRANSFER => true,
                                                                CURLOPT_ENCODING => "",
                                                                CURLOPT_MAXREDIRS => 10,
                                                                CURLOPT_TIMEOUT => 30,
                                                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                                CURLOPT_CUSTOMREQUEST => "GET",
                                                                CURLOPT_HTTPHEADER => array(
                                                                    "key: bcd91342ee0d1c4b83b3e49fbf3b133c"
                                                                ),
                                                            ));

                                                            $response = curl_exec($curl);
                                                            $err = curl_error($curl);

                                                            curl_close($curl);

                                                            if ($err) {
                                                                echo "cURL Error #:" . $err;
                                                            } else {
                                                                $kota = json_decode($response, true);

                                                                if ($kota['rajaongkir']['status']['code'] == 200) {
                                                                    foreach ($kota['rajaongkir']['results'] as $kot)
                                                                        echo "<option value='$kot[city_id]'" . ($kot['city_id'] == $this->input->post('kota_penerima') ? 'selected' : "") . ">$kot[city_name]</option>";
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Ekspedisi</label>
                                                    <select name="ekspedisi" id="ekspedisi" class="form-control" required>
                                                        <option>--Pilih--</option>
                                                        <?php
                                                        $ekspedisi = ['jne' => 'JNE', 'pos' => 'POS Indonesia', 'tiki' => 'TIKI'];
                                                        foreach ($ekspedisi as $key => $value) : ?>
                                                            <?php if ($key == $this->input->post('ekspedisi')) : ?>
                                                                <option value="<?= $key ?>" selected><?= $value ?></option>
                                                            <?php else : ?>
                                                                <option value="<?= $key ?>"><?= $value ?></option>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Berat</label> -->
                                            <?php
                                            $total_berat = 0;
                                            foreach ($this->cart->contents() as $berat) : ?>
                                            <?php
                                                $total_berat += $berat['berat'] * $berat['qty'];
                                            endforeach;
                                            ?>
                                            <input type="text" hidden name="berat" class="form-control" value="<?= $total_berat ?>" placeholder="satuan gram">
                                            <!-- </div>
                                            </div> -->
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Alamat</label>
                                                    <input type="text" name="alamat" class="form-control" value="<?= $this->input->post('alamat') ?>" required>
                                                </div>
                                            </div>
                                            <!-- <?php
                                                    $biaya = json_decode($ongkir, true);
                                                    if ($biaya['rajaongkir']['status']['code'] == 200) :
                                                    ?>
                                                <?php foreach ($biaya['rajaongkir']['results'][0]['costs'] as $bia) : ?>
                                                    <div class="card" style="width: 18rem;">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><?= $bia['service'] ?></h5>
                                                            <p class="card-text"><?= $bia['description'] ?></p>
                                                            <h6>Rp. <?= number_format($bia['cost'][0]['value'], 0, ',', '.') ?></h6>
                                                            <p><?= $bia['cost'][0]['etd'] ?> Hari</p>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?> -->
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-primary">Cek Ongkir!</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <form action="<?= base_url('customer/c_customer/pembayaran') ?>" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-12 col-6">
                                <div class="small-box bg-white">
                                    <div class="inner">
                                        <h4>Produk Dipesan</h4>
                                        <table class="table">
                                            <tr align="center">
                                                <th></th>
                                                <th></th>
                                                <th>Harga Satuan</th>
                                                <th>Jumlah</th>
                                                <th>Subtotal Produk</th>
                                            </tr>
                                            <?php
                                            $grand_total = 0;
                                            foreach ($this->cart->contents() as $items) : ?>
                                                <tr>
                                                    <td width="100px"><img src="<?= base_url('uploads/' . $items['image']) ?>" alt="gambar rusak" class="img-thumbnail"></td>
                                                    <td><br><?= $items['name'] ?></td>
                                                    <!-- <td><br><?= $items['size'] ?></td> -->
                                                    <td><br>Rp. <?= number_format($items['price'], 0, ',', '.') ?></td>
                                                    <td align="center"><br><?= $items['qty'] ?></td>
                                                    <td><br>Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></td>
                                                </tr>
                                            <?php $grand_total += $items['subtotal'];
                                            endforeach; ?>
                                            <tr class="bg-light">
                                                <td colspan="4" align="right">Ongkir :</td>
                                                <td>Rp <?= number_format($biaya['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'], 0, ',', '.') ?></td>
                                            </tr>
                                            <tr class="bg-light">
                                                <td colspan="4" align="right">Grand Total :</td>
                                                <td>Rp. <?= number_format($grand_total += $biaya['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'], 0, ',', '.') ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <input type="text" hidden name="ongkir" value="<?= $biaya['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'] ?>">
                            <input type="text" hidden name="alamat_pengiriman" value="<?= $this->input->post('alamat') ?>">


                            <div class="col-lg-12 col-6">
                                <div class="small-box bg-white">
                                    <div class="inner">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="form-group">
                                                    <label for="">Metode Pembayaran</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <select name="metode_pembayaran" class="form-control" id="pembayaran">
                                                        <?php foreach ($pembayaran as $pem) : ?>
                                                            <option value="<?= $pem ?>"><?= $pem ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="bank">
                                            <div class="col-7">
                                                <div class="form-group">
                                                    <label for="">Pilih Bank</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label for="">Bank</label>
                                                    <select name="bank" class="form-control">
                                                        <option value="" disabled selected>Pilih Bank</option>
                                                        <?php foreach ($bank as $bank) : ?>
                                                            <option value="<?= $bank ?>"><?= $bank ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="">Bukti Bayar</label>
                                                    <input type="file" name="bukti_bayar" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="form-group">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <?php if ($this->input->post('alamat') == !NULL) : ?>
                                                        <button type="submit" class="btn btn-success float-right tombol-checkout">Checkout</button>
                                                    <?php else : ?>
                                                        <!-- <button type="submit" class="btn btn-success float-right tombol-checkout">Checkout</button> -->
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <br>
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
        $(document).ready(function() {
            $('#bank').hide();
            $('#pembayaran').change(function() {
                var payment = $(this).val()
                // console.log(payment);
                if (payment == 'Upload Bukti Bayar') {
                    $('#bank').show();
                } else {
                    $('#bank').hide();
                }
            })
        })

        $('#ekspedisi').change(function() {
            $.ajax({
                url: '<?= base_url('customer/c_customer/ongkir') ?>',
                dataType: 'JSON',
                type: 'POST',
                success: function(result) {
                    console.log(result);
                }
            })
        })

        $('#provinsi').change(function() {
            fetch("<?= base_url('customer/c_customer/kota/') ?>" + this.value, {
                    method: 'GET',
                })
                .then((response) => response.text())
                .then((data) => {
                    console.log(data);
                    $('#kota').html(data)
                })
        })

        $('#provinsi_penerima').change(function() {
            fetch("<?= base_url('customer/c_customer/kota/') ?>" + this.value, {
                    method: 'GET',
                })
                .then((response) => response.text())
                .then((data) => {
                    console.log(data);
                    $('#kota_penerima').html(data)
                })
        })
    </script>
</body>

</html>