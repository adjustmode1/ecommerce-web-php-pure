<div id="checkout-cart" class="container">
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

        <div id="content" class="col-sm-9 checkout">


            <h1>Giỏ hàng
            </h1>
            <form action="index.php?act=giohang" method="post"
                  enctype="multipart/form-data">
                <?php if (isset($_SESSION['user'])) {
                    viewcart(1);
                    ?>
                    <div class="buttons clearfix">
                        <div class="pull-left"><a
                                    href="index.php?act=sanpham"
                                    class="btn btn-default">Continue Shopping</a></div>
                        <div class="pull-right"><a
                                    href="index.php?act=thanhtoan"
                                    class="btn btn-primary" style="border: none;
    background-color: black;">Checkout</a></div>
                    </div>
                <?php } else { ?>
                    <h1 class="h1">Vui lòng <a href="loginUser.php">đăng nhập</a> để mua hàng</h1>
                <?php } ?>

            </form>
        </div>
    </div>
</div>
