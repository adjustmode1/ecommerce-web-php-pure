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
        <li class="active"><strong>Quản lý khách hàng</strong></li>
    </ol>
    <h3>Quản lý khách hàng</h3>
    <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
        <tr>
            <th class="id_sp">Mã tài khoản</th>
            <th class="maSP">Tên đăng nhập</th>
            <th class="tenSP">Mật khẩu</th>
            <th class="tenSP">Họ tên</th>
            <th class="price">Email</th>
            <th class="img">Địa chỉ</th>
            <th class="tenDM">Số điện thoại</th>
            <th class="day">Vai trò</th>
            <th class="xl">Chức năng</th>
        </tr>
        </thead>
        <?php
        $connection = new PDO("mysql:host=127.0.0.1;dbname=ttcs;charset=utf8","root","");
        $query = "select * from taikhoan order by id desc";
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $listtaikhoan = $stmt->fetchAll();
        ?>
        <tbody>
        <?php
        foreach ($listtaikhoan as $taikhoan){
            extract($taikhoan);
            $suatk="index.php?act=suatk&id=".$id;
            $xoatk="index.php?act=xoatk&id=".$id; ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $user; ?></td>
                <td><?php echo $pass; ?></td>
                <td><?php echo $hoten; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $dress; ?></td>
                <td><?php echo $tell; ?></td>
                <td><?php echo $vaitro; ?></td>
                <td>
                    <a href="<?php echo $xoatk; ?>" onclick="return confirm(Bạn có chắc chắn muốn xóa sản phẩm này hay không?);" class="btn btn-danger btn-sm btn-icon icon-left"> <i class="entypo-cancel"></i>
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<!--    <br/> <a href="index.php?act=adddm" class="btn btn-primary"> <i class="entypo-plus"></i>-->
<!--        Thêm-->
<!--    </a> <br/> <br/>-->
</div>
<!--End New============-->
