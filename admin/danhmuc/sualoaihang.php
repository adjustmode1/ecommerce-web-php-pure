<?php
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
}
?>
<?php
if (is_array($dm)) {
    extract($dm);
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
        <li class="active"><strong>Sửa danh mục</strong></li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-body">
                    <form action="index.php?act=updatedm" method="post" role="form" class="form-horizontal form-groups-bordered">
                        <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Tên danh mục</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="field-1" name="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name; ?>"
                                                         placeholder="Tên danh mục">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <input type="submit" class="btn btn-info" value="Cập nhật" name="capnhat">
                            </div>
<!--                            <div class="col-sm-offset-3 col-sm-5">-->
<!--                                <a href="index.php?act=qldm"><button type="submit" class="btn btn-info">Danh sách</button></a>-->
<!--                            </div>-->
                        </div>
                    </form>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--    End New=============-->
