<div id="common-success" class="container">
    <ul class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?act=sanpham">Sản phẩm</a>
    </ul>
    <div class="row">
        <aside id="column-left" class="col-sm-3 hidden-xs">
            <div class="account-content">
                <div class="box-content">
                    <div class="list-group">
                        <h3 class="toggled">Account</h3>
                        <ul class="list-unstyled">
                            <li><a href="loginUser.php"
                                   class="list-group-item">Đăng nhập</a></li>
                            <li><a href="dangky.php"
                                   class="list-group-item">Đăng ký</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sidebar">
                <div class="box-content">
                    <h3 class="box-content toggled">Information</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="index.php?act=lienhe">Liên hệ</a></li>
                        <li>
                            <a href="index.php?act=tintuc">Tin tức</a></li>
                    </ul>
                </div>
            </div>

        </aside>

        <div id="content" class="col-sm-9">
            <h1>Cảm ơn quý khách đã đặt hàng</h1>
            <p>Đặt hàng thành công !</p>
            <p>RABLE: <?=$bill['id'];?></p>
            <p>Ngày đặt hàng: <?=$bill['ngaydathang'];?></p>
            <p>Tổng đơn hàng: <?=$bill['tongdh'];?> VNĐ</p>
            <p>Phương thức thanh toán: <?php $pttt=get_pttt($bill['bill_pttt']); ?></p>
            <div class="buttons">
                <div class="pull-right"><a href="index.php?act=sanpham"
                            class="btn btn-primary" style="background-color: black; border: none">Tiếp tục mua sắm</a></div>
            </div>
        </div>
    </div>
</div>