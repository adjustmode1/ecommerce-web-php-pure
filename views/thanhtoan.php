<div id="checkout-checkout" class="container">
    <ul class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?act=viewcart">Giỏ hàng</a>
        <li><a href="index.php?act=thanhtoan">Thanh toán</a>
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
            <h1>Checkout</h1>
            <div class="panel-group" id="accordion">
                <form class="form-horizontal" action="index.php?act=hoadon" method="post">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Thông tin khách hàng</h4>
                        </div>
                        <div class="panel-collapse" id="collapse-checkout-option">
                            <div class="panel-body">
                                <div class="form-horizontal">
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        $name = $_SESSION['user']['hoten'];
                                        $tell = $_SESSION['user']['tell'];
                                        $email = $_SESSION['user']['email'];
                                        $dress = $_SESSION['user']['dress'];

                                    } else {
                                        $name = '';
                                        $tell = '';
                                        $email = '';
                                        $dress = '';
                                    }
                                    ?>
                                    <div id="payment-new">
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-payment-firstname">Họ
                                                tên</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" value="<?= $name ?>" placeholder="Họ tên"
                                                       id="input-payment-firstname" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-payment-lastname">Số điện
                                                thoại</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tell" value="<?= $tell ?>"
                                                       placeholder="Last Name" id="input-payment-lastname"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"
                                                   for="input-payment-company">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" value="<?= $email ?>"
                                                       placeholder="Email" id="input-payment-company"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-payment-address-1">Địa chỉ
                                                nhận hàng</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="dress" value="<?= $dress ?>"
                                                       placeholder="Địa chỉ nhận hàng" id="input-payment-address-1"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Hình thức thanh toán</h4>
                            </div>
                            <div class="panel-collapse" id="collapse-checkout-confirm">
                                <div class="panel-body">
                                    <div class="form-horizontal">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="pttt" value="1" checked="checked">
                                                Thanh toán khi nhận hàng</label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="pttt" value="2">
                                                Thanh toán bằng thẻ tín dụng</label>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Xác nhận đơn hàng</h4>
                            </div>
                            <div class="panel-collapse" id="collapse-checkout-confirm">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                            <?php viewcart(0); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="buttons">
                                        <div class="pull-right">
                                            <input type="submit" name="mua" value="Đặt mua" id="button-confirm"
                                                    data-loading-text="Loading..." class="btn btn-primary" style="background-color: #222222; border: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </form>
            </div>
        </div>
