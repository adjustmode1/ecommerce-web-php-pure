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
        <li class="active"><strong>Quản lý danh mục</strong></li>
    </ol>
    <h3>Quản lý danh mục</h3>
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Khách hàng</th>
            <th>Số lượng hàng</th>
            <th>Giá trị đơn hàng</th>
            <th>Ngày đặt hàng</th>
            <th>Tình trạng đơn hàng</th>
            <th>Xử lý</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listbill as $bill) {
            extract($bill);
            $kh=$bill["bill_name"].'
            <br>'.$bill["bill_email"].'
            <br>'.$bill["bill_dress"].'
            <br>'.$bill["bill_tel"];
            $countsp=loadall_cart_count($bill["id"]);
            $ttdh=get_ttdh($bill['bill_status']);
            $suadh="index.php?act=suadh&id=".$id;
            $xoadh="index.php?act=xoadh&id=".$id; ?>
            <tr>
                <td>
                    RABLE-<?php echo $id; ?>
                </td>
                <td><?php echo $kh; ?></td>
                <td><?php echo $countsp; ?></td>
                <td><?php echo $bill['tongdh']; ?></td>
                <td><?php echo $bill['ngaydathang']; ?></td>
                <td><?php echo $ttdh; ?></td>
                <td>
                    <a href="<?php echo $xoadh; ?>" class="btn btn-danger btn-sm btn-icon icon-left"> <i class="entypo-cancel"></i>
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!--End New============-->
