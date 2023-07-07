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
        <li class="active"><strong>Quản lý bình luận</strong></li>
    </ol>
    <h3>Quản lý bình luận</h3>
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
        <tr>
            <th class="id_sp">ID</th>
            <th class="maSP">Nội dung</th>
            <th class="tenSP">ID user</th>
            <th class="price">ID Sản phẩm</th>
            <th class="img">Ngày bình luận</th>
            <th class="xl">Chức năng</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listbinhluan as $binhluan) {
            extract($binhluan);
            $xoabl="index.php?act=xoabl&id=".$id; ?>
            <tr>
                <td>
                    <?php echo $id; ?>
                </td>
                <td><?php echo $noidung; ?></td>
                <td><?php echo $iduser; ?></td>
                <td><?php echo $idsp; ?></td>
                <td><?php echo $ngaybl; ?></td>
                <td>
                    <a href="<?php echo $xoabl; ?>" class="btn btn-danger btn-sm btn-icon icon-left"> <i class="entypo-cancel"></i>
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!--End New============-->
