<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Neon Admin Panel"/>
    <meta name="author" content="Laborator.co"/>
    <link rel="icon" href="https://demo.neontheme.com/assets/images/favicon.ico">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K3LP6R3');</script>
    <title>Neon | Data Tables</title>
    <link rel="stylesheet"
          href="public/css/jquery-ui-1.10.3.custom.min.css"
          id="style-resource-1">
    <link rel="stylesheet" href="public/css/font-icons/entypo/css/entypo.css"
          id="style-resource-2">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
    <link rel="stylesheet" href="public/css/bootstrap.css" id="style-resource-4">
    <link rel="stylesheet" href="public/css/neon-core.css" id="style-resource-5">
    <link rel="stylesheet" href="public/css/neon-theme.css" id="style-resource-6">
    <link rel="stylesheet" href="public/css/neon-forms.css" id="style-resource-7">
    <link rel="stylesheet" href="public/css/custom.css" id="style-resource-8">
    <script src="public/js/jquery-1.11.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="public/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="public/html5shiv.min.js"></script>
    <script src="public/respond.min.js"></script> <![endif]-->  </head>
<body class="page-body" >
<div class="page-container">
    <div class="sidebar-menu">
        <div class="sidebar-menu-inner">
            <header class="logo-env">
                <div class="logo"><a href="#" style="font-size: 40px; color: white; font-weight: bold">WEARZO</a></div>
                <div class="sidebar-collapse"><a href="#" class="sidebar-collapse-icon"> <i class="fa fa-list"></i>
                    </a></div>
                <div class="sidebar-mobile-menu visible-xs"><a href="#" class="with-animation"> <i
                                class="fa fa-list"></i> </a></div>
            </header>
            <ul id="main-menu" class="main-menu">
                <li class="has-sub"><a href="index.php"><i
                                class="fa fa-fw fa-tachometer-alt"></i><span class="title">Bảng điều khiển</span></a>
                </li>
                <li class="has-sub"><a href="#"><i class="fas fa-fw fa-cog"></i><span class="title">Chức năng</span></a>
                    <ul>
                        <li><a href="index.php?act=qldm"><span class="title">Quản lý danh mục</span></a>
                        </li>
                        <li><a href="index.php?act=qlsp"><span class="title">Quản lý hàng hóa</span></a>
                        </li>
                        <li><a href="index.php?act=qltk"><span class="title">Quản lý tài khoản</span></a>
                        </li>
                        <li><a href="index.php?act=qlbl"><span class="title">Quản lý bình luận</span></a>
                        </li>
                        <li><a href="index.php?act=thongke"><span class="title">Thống kê, tổng hợp</span></a>
                        </li>
                        <li><a href="index.php?act=dsdh"><span class="title">Danh sách đơn hàng</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub"><a href="index.php?act=bieudo"><i
                                class="fa fa-exchange-alt"></i><span class="title">Biểu đồ</span></a>
                </li>
                <li class="has-sub"><a href="../views/index.php"><i
                                class="fa fa-arrow-circle-left"></i><span class="title">Quay lại trang chủ</span></a>
                </li>
            </ul>
        </div>
    </div>