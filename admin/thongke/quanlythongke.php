<?php
if(isset($_SESSION['user'])){
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
                        <?=$hoten?>
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
        <li class="active"><strong>Danh sách thống kê</strong></li>
    </ol>
    <h3>Danh sách thống kê</h3>
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
        <tr>
            <th>Mã danh mục</th>
            <th>Tên danh mục</th>
            <th>Số lượng</th>
            <th>Giá cao nhất</th>
            <th>Giá thấp nhất</th>
            <th>Giá trung bình</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listthongke as $thongke) {
            extract($thongke); ?>
            <tr>
                <td><?php echo $madm; ?></td>
                <td><?php echo $tendm; ?></td>
                <td><?php echo $countsp; ?></td>
                <td><?php echo $maxgiacu; ?></td>
                <td><?php echo $mingiacu; ?></td>
                <td><?php echo $avggiacu; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <br/> <a href="index.php?act=bieudo" class="btn btn-primary"> <i class="fa fa-chart-area"></i>
        Biểu đồ
    </a> <br/> <br/>
</div>
<!--End New============-->
