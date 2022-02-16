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
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?= $pesanan ?></h3>

                                    <p>Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <?php
                                    $qty = 0;
                                    foreach ($produk as $pro) {
                                        $qty += $pro->qty;
                                    }
                                    ?>
                                    <h3><?= $qty ?></h3>

                                    <p>Data Products</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?= $member ?><sup style="font-size: 20px">Member</sup></h3>

                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- PIE CHART -->
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Best Seller</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6"> -->
                        <!-- BAR CHART -->
                        <!-- <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Total Income</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div> -->
                        <!-- </div> -->
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

            // var areaChartData = {
            //     labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            //     datasets: [{
            //             label: '2021',
            //             backgroundColor: 'rgba(60,141,188,0.9)',
            //             borderColor: 'rgba(60,141,188,0.8)',
            //             pointRadius: false,
            //             pointColor: '#3b8bba',
            //             pointStrokeColor: 'rgba(60,141,188,1)',
            //             pointHighlightFill: '#fff',
            //             pointHighlightStroke: 'rgba(60,141,188,1)',
            //             data: [28, 48, 40, 19, 86, 27, 90]
            //         },
            //         {
            //             label: '2022',
            //             backgroundColor: 'rgba(210, 214, 222, 1)',
            //             borderColor: 'rgba(210, 214, 222, 1)',
            //             pointRadius: false,
            //             pointColor: 'rgba(210, 214, 222, 1)',
            //             pointStrokeColor: '#c1c7d1',
            //             pointHighlightFill: '#fff',
            //             pointHighlightStroke: 'rgba(220,220,220,1)',
            //             data: [65, 59, 80, 81, 56, 55, 40]
            //         },
            //     ]
            // }


            var donutData = {
                labels: [
                    'SAMSUNG',
                    'iPHONE',
                    'XIAOMI',
                    'REALME',
                    'POCO',
                    'OPPO',
                    'VIVO',
                    'SONY'
                ],
                datasets: [{
                    data: [
                        <?php
                        $total = 0;
                        foreach ($samsung as $key) {
                            $total += $key->qty;
                        }
                        echo $total;
                        ?>,

                        <?php
                        $total = 0;
                        foreach ($iphone as $key) {
                            $total += $key->qty;
                        }
                        echo $total;
                        ?>,

                        <?php
                        $total = 0;
                        foreach ($xiaomi as $key) {
                            $total += $key->qty;
                        }
                        echo $total;
                        ?>,

                        <?php
                        $total = 0;
                        foreach ($realme as $key) {
                            $total += $key->qty;
                        }
                        echo $total;
                        ?>,

                        <?php
                        $total = 0;
                        foreach ($poco as $key) {
                            $total += $key->qty;
                        }
                        echo $total;
                        ?>,

                        <?php
                        $total = 0;
                        foreach ($oppo as $key) {
                            $total += $key->qty;
                        }
                        echo $total;
                        ?>,

                        <?php
                        $total = 0;
                        foreach ($vivo as $key) {
                            $total += $key->qty;
                        }
                        echo $total;
                        ?>,

                        <?php
                        $total = 0;
                        foreach ($sony as $key) {
                            $total += $key->qty;
                        }
                        echo $total;
                        ?>
                    ],
                    backgroundColor: ['#042bd9', '#75787d', '#fa8805', '#fad905', '#f5e547', '#18ba26', '#4680f2', '#f505b5'],
                }]
            }


            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
            var pieData = donutData;
            var pieOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var pieChart = new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            })

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = jQuery.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            var temp1 = areaChartData.datasets[1]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false
            }

            var barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })

        })
    </script>
    <!-- jQuery -->
</body>

</html>