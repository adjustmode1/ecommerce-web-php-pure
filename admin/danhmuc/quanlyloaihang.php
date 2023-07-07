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
            <th>Mã loại</th>
            <th>Tên loại</th>
            <th>Xử lý</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            $suadm = "index.php?act=suadm&id=" . $id;
            $xoadm = "index.php?act=xoadm&id=" . $id; ?>
            <tr>
                <td>
                    <?php echo $id; ?>
                </td>
                <td><?php echo $name; ?></td>
                <td><a href="<?php echo $suadm; ?>" class="btn btn-info btn-sm btn-icon icon-left"> <i class="entypo-pencil"></i>
                        Sửa
                    </a>
                    <a href="<?php echo $xoadm; ?>" class="btn btn-danger btn-sm btn-icon icon-left"> <i class="entypo-cancel"></i>
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <br/> <a href="index.php?act=adddm" class="btn btn-primary"> <i class="entypo-plus"></i>
        Thêm
    </a> <br/> <br/>
</div>
<!--End New============-->
