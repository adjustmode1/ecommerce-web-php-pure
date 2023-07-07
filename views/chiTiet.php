<?php

if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = 1;
} else {
    $_SESSION['name'] += 1;
}
// echo "Lượt truy cập:".$_SESSION['name'];
$luotxem = $_SESSION['name'];
$up_luot_xem = up_luot_xem($luotxem, $id);
?>
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
<?php
extract($onesp);
$img = $img_path . $img;
$sql1 = "select name as name from danhmuc where id = " . $iddm . "";
$danhmuc = pdo_query($sql1);
?>
<div id="product-page" class="container">
    <ul class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?act=sanpham">Sản phẩm</a>
        </li>
        <li>
            <a href="#"><?php echo $name; ?></a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-12">

            <h2 class="page_title"><?php echo $name; ?></h2>
            <div class="pro-deatil row">
                <div class="col-sm-6 product-img">
                    <div class="thumbnails">
                        <div class="pro-image">
                            <a href="#"
                               title="Barrel Bag" class="thumbnail ">
                                <img src="<?php echo $img; ?>"
                                     title="Barrel Bag" id="zoom" alt="Barrel Bag"
                                     data-zoom-image="<?php echo $img; ?>" style="width: 500px; height: auto"/>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 right_info">
                    <h1 class=""><?php echo $name; ?></h1>
                    <div class="rating clearfix">
                        <div class="product-rating">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                        class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                        class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                        class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                        class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                        class="fa fa-star-o fa-stack-1x"></i></span>

                        </div>
                        <a href="" class="reviews"
                           onclick="$('a[href=\'#tab-review\']').trigger('click'); $('body,html').animate({scrollTop: $('.nav-tabs').offset().top}, 800); return false;">1
                            reviews</a>
                    </div>
                    <hr>
                    <ul class="list-unstyled">
                        <li><span class="disc">Loại sản phẩm:</span>
                            <a class="disc1" href="#"><?php echo $danhmuc[0]['name']; ?></a>
                        </li>
                        <li><span class="disc">Mã sản phẩm:</span><span class="disc1"> #<?php echo $id; ?></span></li>
                        <li><span class="disc">Lượt xem:</span><span class="disc1"> <?php echo $luotxem; ?></span></li>
                    </ul>
                    <hr>
                    <ul class="list-unstyled">
                        <li>
                            <span class="pro_price"><?php echo $giamoi; ?> đ</span>
                        </li>
                        <li class="tax">Giá cũ: <?php echo $giacu; ?> đ</li>
                    </ul>
                    <hr>
                    <div id="product" class="product-options">
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="name" value="<?php echo $name; ?>">
                            <input type="hidden" name="img" value="<?php echo $img; ?>">
                            <input type="hidden" name="giamoi" value="<?php echo $giamoi; ?>">
                            <div class="product-btn-quantity">
                                <div class="minus-plus">
                                    <input type="number" name="soluong" value="1" size="10" id="input-quantity"
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="buy-price btn-group">
                                <button type="submit" name="addtocart" value="Add to card"
                                        class="btn btn-primary btn-lg btn-block">
                                    <i class="fa fa-shopping-cart"></i>Add to card
                                </button>
                            </div>
                        </form>
                        <div class="alert alert-info"><i class="fa fa-info-circle"></i> Còn hàng
                        </div>
                    </div>
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style"
                         data-url="https://opencart.mahardhi.com/MT06/wearzo/04/index.php?route=product/product&amp;product_id=42">
                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_pinterest_pinit"></a>
                        <a class="addthis_counter addthis_pill_style"></a>
                    </div>
                    <script type="text/javascript"
                            src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
                    <!-- AddThis Button END -->
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row propage-tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-description" data-toggle="tab" style="border: none">Mô tả /
                                Bình luận</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-description">
                            <p>
                                <font face="helvetica,geneva,arial" size="2">
                                    <font face="Helvetica" size="2">
                                        <?php echo $mota; ?>
                                    </font>
                            <p>
                        </div>
<!--                        <div class="tab-pane" id="tab-review">-->
<!--                            --><?php
//                            session_start();
//                            include "../../model/pdo.php";
//                            include "../../model/binhluan.php";
//                            include "../../model/taikhoan.php";
//                            // if(isset($_SESSION['user'])){
//                            //     extract($_SESSION['user']);
//                            // }
//                            $idsp = $_REQUEST['idsp'];
//                            $dsbl = loadall_binhluan($idsp);
//
//                            ?>
<!--                            <form class="form-horizontal" id="form-review" --><?//= $_SERVER['PHP_SELF']; ?><!-- method="post">-->
<!--                                <input type="hidden" name="idsp" value="--><?//= $idsp ?><!--">-->
<!--                                <div id="review">-->
<!--                                    <table class="table table-striped table-bordered">-->
<!--                                        <tbody>-->
<!--                                        <tr>-->
<!--                                            <td style="width: 50%;"><strong>Test</strong></td>-->
<!--                                            <td class="text-right">07/06/2022</td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td colspan="2"><p>sádg</p>-->
<!--                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i-->
<!--                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span-->
<!--                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i-->
<!--                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span-->
<!--                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i-->
<!--                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span-->
<!--                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i-->
<!--                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span-->
<!--                                                        class="fa fa-stack"><i-->
<!--                                                            class="fa fa-star-o fa-stack-2x"></i></span></td>-->
<!--                                        </tr>-->
<!--                                        </tbody>-->
<!--                                    </table>-->
<!--                                </div>-->
<!--                                <h2>Viết bình luận</h2>-->
<!--                                <div class="form-group required">-->
<!--                                    <div class="col-sm-2">-->
<!--                                        <label class="control-label" for="input-review">Bình luận</label>-->
<!--                                    </div>-->
<!--                                    --><?php //if (isset($_SESSION['user'])) { ?>
<!--                                    <div class="col-sm-10">-->
<!--                                        <textarea name="noidung" rows="5" id="input-review"-->
<!--                                                  class="form-control"></textarea>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                --><?php //} else {
//                                    echo '<h1 class="h1">Bạn hãy đăng nhập để bình luận</h1>';
//                                }
//                                ?>
<!--                        </div>-->
<!--                        <div class="buttons clearfix">-->
<!--                            <div class="pull-right">-->
<!--                                <button type="submit" id="button-review" data-loading-text="Loading..."-->
<!--                                        class="btn btn-primary" name="guibinhluan" value="Gửi">Gửi-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <div class="related-products-block box">
            <div class="box-content">
                <div class="page-title"><h3>Sản phẩm cùng loại</h3></div>
                <div class="block_box row category-row">
                    <div id="related-carousel" class="box-product  related-carousel  clearfix" data-items="5">
                        <?php
                        foreach ($sp_cung_loai as $sp_cung_loai) {
                            extract($sp_cung_loai);
                            $hinh = $img_path . $img;
                            $linksp = "index.php?act=sanphamct&idsp=" . $id; ?>
                            <div class="product-layout col-xs-12">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="<?php echo $linksp; ?>">
                                            <img src="<?php echo $hinh; ?>"
                                                 alt="Causal T-Shirt" title="Causal T-Shirt"
                                                 class="img-responsive"/>
                                            <img class="img-responsive hover-img"
                                                 src="<?php echo $hinh; ?>"
                                                 title="Causal T-Shirt" alt="Causal T-Shirt"/>
                                        </a>
                                        <div class="button-group">
                                            <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                <input type="hidden" name="name" value="<?php echo $name; ?>">
                                                <input type="hidden" name="img" value="<?php echo $img; ?>">
                                                <input type="hidden" name="giamoi" value="<?php echo $giamoi; ?>">
                                                <div class="buy-price btn-group">
                                                    <button type="submit"
                                                            class="addcart btn btn-primary btn-lg btn-block"
                                                            name="addtocart" data-toggle="tooltip"
                                                            title="Add to Cart"
                                                            value="Add to card" style="border-radius: 100%"><i
                                                                class="fa fa-cart-plus"></i></button>
                                                    <button type="button" data-toggle="tooltip"
                                                            class="quickview-button"
                                                            title="Quickview">
                                                        <a href="<?php echo $linksp; ?>" style="color: inherit;"><i
                                                                    class="fa fa-eye"></i></a></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="thumb-description clearfix">
                                        <div class="caption">
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span></div>
                                            <h4 class="product-title"><a
                                                        href="<?php echo $linksp; ?>"><?php echo $name; ?></a></h4>
                                            <p class="price">
                                                <?php echo $giamoi; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</div>
<!-- M-Custom script -->
<script><!--
    $(document).ready(function () {
        // Additional images
        // const direction = $('html').attr('dir');
        // $('#additional-carousel').each(function () {
        // 	if ($(this).closest('#column-left').length == 0 && $(this).closest('#column-right').length == 0) {
        // 		$(this).addClass('owl-carousel owl-theme');
        // 		const items = $(this).data('items') || 4;
        // 		const sliderOptions = {
        // 			loop: false,
        // 			nav: true,
        // 			navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        // 			dots: false,
        // 			items: items,
        // 			mouseDrag: false,
        // 		    touchDrag: false,
        // 		    pullDrag: false,
        // 		    rewind: false,
        // 		    autoplay: true,
        // 			responsiveRefreshRate: 200,
        // 			responsive: {
        // 				0: { items: 1 },
        // 				320: { items: ((items - 2) > 1) ? (items - 2) : 1 },
        // 				375: { items: ((items - 1) > 1) ? (items - 1) : 1 },
        // 				426: { items: items },
        // 				768: { items: ((items - 1) > 1) ? (items - 1) : 1 },
        // 				1441: { items: items }
        // 			}
        // 		};
        // 		if (direction == 'rtl') sliderOptions['rtl'] = true;
        // 		$(this).owlCarousel(sliderOptions);
        // 	}
        // });

        const directi = $('html').attr('dir');
        $('.related-carousel').each(function () {
            if ($(this).closest('#column-left').length == 0 && $(this).closest('#column-right').length == 0) {
                $(this).addClass('owl-carousel owl-theme');
                const items = $(this).data('items') || 5;
                const sliderOptions = {
                    loop: false,
                    rewind: false,
                    autoplay: false,
                    autoplayTimeout: 3000,
                    nav: true,
                    mouseDrag: true,
                    touchDrag: true,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    dots: false,
                    items: items,
                    responsiveRefreshRate: 200,
                    responsive: {
                        0: {items: 1},
                        320: {items: ((items - 3) > 1) ? (items - 3) : 1},
                        601: {items: ((items - 2) > 1) ? (items - 2) : 1},
                        992: {items: ((items - 1) > 1) ? (items - 1) : 1},
                        1441: {items: items}
                    }
                };
                if (directi == 'rtl') sliderOptions['rtl'] = true;
                $(this).owlCarousel(sliderOptions);
            }
        });

        // Additional images
        $('.slick-carousel').slick({
            infinite: false,
            vertical: true,
            verticalSwiping: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1801,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 1441,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 426,
                    settings: {
                        slidesToShow: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    });

    $(document).ready(function () {
        if ($(window).width() > 991) {
            $("#zoom").elevateZoom({
                zoomType: "inner",
                cursor: "crosshair",
                gallery: 'additional-carousel',
                galleryActiveClass: 'active'
            });

            var image_index = 0;
            $(document).on('click', '.thumbnail', function () {
                $('.thumbnails').magnificPopup('open', image_index);
                return false;
            });

            $('#additional-carousel a').click(function () {
                var smallImage = $(this).attr('data-image');
                var largeImage = $(this).attr('data-zoom-image');
                var ez = $('#zoom').data('elevateZoom');
                $('.thumbnail').attr('href', largeImage);
                ez.swaptheimage(smallImage, largeImage);
                image_index = $(this).index('#additional-carousel a');
                return false;
            });
        } else {
            $(document).on('click', '.thumbnail', function () {
                $('.thumbnails').magnificPopup('open', 0);
                return false;
            });
        }
    });

    $(document).ready(function () {
        $('.thumbnails').magnificPopup({
            type: 'image',
            delegate: 'a.elevatezoom-gallery', // Mahardhi Edit
            gallery: {
                enabled: true
            }
        });
    });

    //--></script>

<!---->