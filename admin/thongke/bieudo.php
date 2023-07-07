<?php
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
}
?><?php
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
}
?>
<div class="main-content">
    <div class="row">
        <div class="col-md-6 col-sm-8 clearfix">
            <ul class="user-info pull-left pull-none-xsm">
                <li class="profile-info dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img
                                src="https://demo.neontheme.com/assets/images/thumb-1@2x.png" alt="" class="img-circle"
                                width="44"/>
                        <?= $hoten ?>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-4 clearfix hidden-xs">
            <ul class="list-inline links-list pull-right">
                <li class="sep"></li>
                <li><a href="#">
                        Đăng xuất <i class="entypo-logout right"></i> </a></li>
            </ul>
        </div>
    </div>
    <hr/>
    <ol class="breadcrumb bc-3">
        <li><a href="£"><i class="fa fa-home"></i>Trang Admin</a></li>
        <li class="active"><strong>Thống kê sản phẩm theo danh mục sản phẩm</strong></li>
    </ol>
    <br/> <a href="index.php?act=thongke" class="btn btn-primary"> <i class="fa fa-list"></i>
        Danh sách
    </a> <br/> <br/>
    <div class="bieudo" style="width:100%; max-width:600px; height:600px;">
        <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng sản phẩm'],
                <?php
                $tongdm = count($listthongke);
                $i = 1;

                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    if ($i == $tongdm) $dauphay = ""; else $dauphay = ",";
                    echo "['" . $thongke['tendm'] . "'," . $thongke['countsp'] . "]" . $dauphay;
                    $i += 1;
                }
                ?>
            ]);

            var options = {
                title: '',
                is3D: true
            };

            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>
    <!-- <div class="add"> -->
    <!-- <a href="index.php?act=thongke"><input type="button" value="Danh sách"></a> -->
    <!-- </div> -->
    <!--</body>-->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</div>
<!--</html>-->



