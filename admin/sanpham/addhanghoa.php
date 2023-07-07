<?php
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
        <li class="active"><strong>Thêm sản phẩm</strong></li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-body">
                    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" role="form"
                          class="form-horizontal form-groups-bordered">
                        <div class="form-group"><label for="field-1" class="col-sm-3 control-label">Tên sản phẩm</label>
                            <div class="col-sm-5"><input type="text" class="form-control" id="field-1" name="tensp"
                                                         placeholder="Tên sản phẩm"></div>
                        </div>
                        <div class="form-group"><label for="field-1" class="col-sm-3 control-label">Giá cũ</label>
                            <div class="col-sm-5"><input type="text" class="form-control" id="field-1" name="giacu"
                                                         placeholder="Giá cũ"></div>
                        </div>
                        <div class="form-group"><label for="field-1" class="col-sm-3 control-label">Giá mới</label>
                            <div class="col-sm-5"><input type="text" class="form-control" id="field-1" name="giamoi"
                                                         placeholder="Giá mới"></div>
                        </div>
                        <div class="form-group"><label for="field-1" class="col-sm-3 control-label">Ảnh</label>
                            <div class="col-sm-5"><input type="file" class="form-control" id="field-file" name="hinh"
                                                         placeholder="Ảnh"></div>
                        </div>
                        <div class="form-group"><label for="field-ta"
                                                       class="col-sm-3 control-label">Mô tả</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" id="field-ta" name="mota"
                                          placeholder="Mô tả"></textarea></div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label">Danh mục</label>
                            <div class="col-sm-5"><select class="form-control" name="iddm">
                                    <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                        echo '<option value="' . $id . '">' . $name . '</option>';
                                    }
                                    ?>
                                </select></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <input class="add btn btn-info" type="submit" name="themmoi" value="Thêm mới">
                            </div>
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
