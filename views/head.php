<?php
ob_start();
// ini_set('display_errors', 'On');
include 'conect/conect.php';
define("FLASK_API_URL","http://127.0.0.1:5000/search_by_image");
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
?>
<!--New===================================-->
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Your Store</title>
    <meta name="description" content="My Store"/>
    <!--    <base href="https://opencart.mahardhi.com/MT06/wearzo/04/"/>-->
    <!--    CSS-->
    <script src="../views/js2/jquery/jquery-2.1.1.min.js"></script>

    <link rel="stylesheet" href="../views/css/style/jquery-ui.min.css">
    <link rel="stylesheet" href="../views/css/style/owl.carousel.min.css">
    <link rel="stylesheet" href="../views/css/style/owl.theme.default.min.css">
    <link rel="stylesheet" href="../views/css/style/slick.css">
    <link rel="stylesheet" href="../views/css/style/style.css">
    <link rel="stylesheet" href="../views/css/home.css">
    <link rel="stylesheet" href="../views/js2/bootstrap/bootstrap.min.css">
    <script src="../views/js2/bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../views/js2/font-awesome/font-awesome.min.css">
    <script src="../views/js2/javascript/jquery.elevateZoom.min.js"></script>
    <script src="../views/js2/jquery/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="js2/fonts/fontawesome-webfont.woff2">
    <link rel="stylesheet" href="../views/js2/jquery/magnific-popup.css">
    <script src="../views/js2/javascript/owl.carousel.min.js"></script>
    <!--    <script src="../views/js2/javascript/quickview.js"></script>-->
    <link rel="stylesheet" href="../views/css/style/mahardhi-font.css">
    <link rel="stylesheet" href="../views/css/style/animate.min.css">
    <link rel="stylesheet" href="../views/js2/jquery/opencart.css">
    <link rel="stylesheet" href="../views/js2/jquery/swiper.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!--    JS-->


    <script src="../views/js2/javascript/custom.js"></script>
    <script src="../views/js2/javascript/jquery.cookie.js"></script>

    <script src="../views/js2/javascript/jquery-ui.min.js"></script>
    <script src="../views/js2/javascript/mahardhi_search.js"></script>


    <script src="../views/js2/javascript/slick.js"></script>
    <script src="../views/js2/javascript/tabs.js"></script>

    <script src="../views/js2/jquery/swiper.jquery.min.js"></script>
    <script src="../views/js2/common.js"></script>
    <style>
        :root {
            --primary-color: #222222;
            --primary-hover-color: #ff4040;
            --secondary-color: #ffffff;
            --secondary-light-color: #777777;
            --background-color: #f7f7f7;
            --border-color: #e5e5e5
        }
    </style>
    <link href="https://opencart.mahardhi.com/MT06/wearzo/04/image/catalog/cart.png" rel="icon"/>
</head>
<body class="common-home">
<!--<div class="loader"></div>-->
<!--<nav id="top" class="hidden-lg hidden-md">-->
<!--    <div class="container">-->
<!--        <div class="top-inner">-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="header-top-inner clearfix">
                    <div class="header-left col-md-3 hidden-xs hidden-sm">

                    </div>
                    <div class="header-center col-md-6 col-xs-6">
                        <!-- start logo -->
                        <div id="logo">
                            <a href=""><img src="https://opencart.mahardhi.com/MT06/wearzo/04/image/catalog/logo.png"
                                            title="Your Store" alt="Your Store" class="img-responsive"/></a>
                        </div>
                    </div>
                    <div class="header-right header-links col-md-3 col-xs-6">
                        <!-- start search -->
<!--                        <div class="btn_search">-->
<!--                            <a class="#" style="font-size: 20px; color: black">-->
<!--                                <i class="fa fa-camera"></i>-->
<!--                            </a>-->
<!--                        </div>-->
                    <div class="btn_search search_by_image" style="margin: 0 32px -6px 0">
                        <form method="post" id="searchByImageForm" enctype="multipart/form-data">
                            <label for="fileToUpload" style="cursor: pointer;">
                                <i class="fa fa-camera" aria-hidden="true" style="font-size: 20px; color: black"></i>
                            </label>
                            <input style="display:none;" id="fileToUpload" type="file" name="fileToUpload">
                        </form>
                    </div>

                    <script>
                        document.getElementById("fileToUpload").onchange = function(e) {
                            e.preventDefault(); // Prevent the form from being submitted in the traditional way
                            const formData = new FormData();
                            const file = document.getElementById("fileToUpload").files[0];
                            formData.append("imagefile", file);
                            var xhr = new XMLHttpRequest();
                            xhr.open("POST", "<?php echo FLASK_API_URL;?>");
                            $.ajax({
                                type: "POST",
                                enctype: 'multipart/form-data',
                                url: 'http://127.0.0.1:5000/search_by_image',
                                data: formData,
                                processData: false,
                                contentType: false,
                                cache: false,
                                timeout: 800000,
                                success: function(response) {
                                    var data = response['data'];
                                    window.location.href = `index.php?act=sanpham&id=${data}&img=${'1.jpg'}`;
                                },
                                error: function(response) {
                                    // console.log(response)
                                    alert('false')
                                }
                                });
                        };
                    </script>

                        <div class="btn_search">
                            <a class="search-btn">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <!-- start account -->
                        <div id="header_ac" class="dropdown">
                            <a href="#"
                               title="My Account" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user-circle"></i><span class="account-here hidden">Tài khoản</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
                                <?php if(isset($user['email'])){?>
                                    <li>
                                        <a href="index.php?act=profile">Tài khoản của tôi</a>
                                    </li>
                                    <li>
                                        <a href="logOut.php">Đăng xuất</a>
                                    </li>
                                <?php }else{?>
                                    <li>
                                        <a href="dangky.php">Đăng ký tài khoản</a>
                                    </li>
                                    <li>
                                        <a href="loginUser.php">Đăng nhập</a>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                        <!-- start cart -->
                        <?php if(isset($user['email'])){?>
                            <div class="header_cart">
                                <a href="index.php?act=viewcart">
<!--                                <div id="cart" class="btn-group btn-block">-->
<!--                                    <button type="button" data-toggle="dropdown" data-loading-text="Loading..."-->
<!--                                            class="btn btn-inverse btn-block btn-lg dropdown-toggle">-->
                                        <span id="cart-total" ><?php echo count($_SESSION['mycart']); ?></span>
                                        <i class="fa fa-light fa-cart-plus" style="font-size: 25px; color: black;"></i>

<!--                                    </button>-->
<!--                                </div>-->
                                </a>
                            </div>
                        <?php }?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom-inner">
                <!-- start menu -->
                <nav id="menu" class="navbar navbar_menu">
                    <div class="navbar-header">
                        <button type="button" class="btn btn-navbar navbar-toggle" id="btnMenuBar"><i
                                    class="icon-menu"></i></button>
                    </div>
                    <div id="topCategoryList" class="main-menu menu-navbar clearfix" data-more=More>
                        <div class="menu-close hidden-lg hidden-md"><span id="category" class="">Menu</span><i
                                    class="icon-close"></i></div>
                        <ul class="nav navbar-nav">
                            <li class="menulist home active"><a id="home" href="index.php">Trang chủ</a></li>
                            <li class="dropdown menulist">
                                <a href="index.php?act=sanpham" class="dropdown-toggle" aria-expanded="false">Sản
                                    phẩm</a>
                                <div class="dropdown-menu navcol-menu item-column column-3">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled childs_1">
                                            <li class="dropdown-submenu sub-menu-item">
                                                <a href="#"
                                                   class="dropdown-toggle" aria-expanded="false">Danh mục</a>
                                                <?php
                                                $dsdm = loadall_danhmuc();
                                                foreach ($dsdm as $dm) {
                                                    extract($dm);
                                                    $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                                    echo '<ul class="list-unstyled sub-menu ">
                                                                <li>
                                                                    <a href="' . $linkdm . '">' . $name . '</a>
                                                                </li>
                                                            </ul>';
                                                } ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menulist"><a href="index.php?act=lienhe">Liên hệ</a></li>
                            <li class="menulist"><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                            <li class="menulist"><a href="index.php?act=tintuc">Tin tức</a></li>
                        </ul>
                    </div>
                </nav>

                <script type="text/javascript">
                    $(function () {
                        var url = window.location.href;
                        $("#menu .nav.navbar-nav a").each(function () {
                            if (url == (this.href)) {
                                $("#menu li").removeClass("active");
                                $(this).closest("li").addClass("active");
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="header-search">
        <div id="mahardhiSearch" class="input-group mahardhi-search">
            <form action="index.php?act=sanpham" method="post" style="width: 100%">
                <input type="text" value="" placeholder="Nhập sản phẩm cần tìm..."
                       class="form-control input-lg ui-autocomplete-input" name="kyw"/>
                <span class="btn-search input-group-btn">
                    <i class="fa fa-search" aria-hidden="true" name="timkiem"></i>
                </span>
            </form>
            <?php
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);

            if(isset($_GET['id'])){
                $list_id = explode(',',$_GET['id']);
                $id_conditions = array();
                foreach ($list_id as $value) {
                $id_conditions[] = "id = $value";
                }
                $id_clause = implode(" OR ", $id_conditions);
                $sql = "SELECT * FROM sanpham WHERE $id_clause";
                echo $sql;
                $dssp = loadall_sanpham_by_img( $sql);
            }
            
            $tendm = load_ten_dm($iddm);
            ?>
        </div>

        <script type="text/javascript">
            $('#mahardhiSearch .btn-search button').bind('click', function () {
                url = 'index.php?route=product/search';

                var search = $('#mahardhiSearch input[name=\'search\']').prop('value');
                if (search) {
                    url += '&search=' + encodeURIComponent(search);
                }

                var category_id = $('#mahardhiSearch select[name=\'category_id\']').prop('value');
                if (category_id > 0) {
                    url += '&category_id=' + encodeURIComponent(category_id);
                }

                location = url;
            });

            $('#mahardhiSearch input[name=\'search\']').bind('keydown', function (e) {
                if (e.keyCode == 13) {
                    $('#mahardhiSearch .btn-search button').trigger('click');
                }
            });
        </script>

        <i class="serach-close fa fa-close"></i>
    </div>
</header>

<script><!--
	$(document).ready(function () {
        var headerfixed = 1;
        if (headerfixed == 1) {
            $(window).scroll(function () {
                if ($(window).width() > 991) {
                    if ($(this).scrollTop() > 110) {
                        $('header').addClass('header-fixed');
                    } else {
                        $('header').removeClass('header-fixed');
                    }
                } else {
                    $('header').removeClass('header-fixed');
                }
            });
        } else {
            $('header').removeClass('header-fixed');
        }
    });
</script>
<!--End New==================================-->
