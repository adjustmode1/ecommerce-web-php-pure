
<div id="product-category" class="container">
    <ul class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?act=sanpham">Sản phẩm</a>
        </li>
    </ul>
    <div class="row">
        <aside id="column-left" class="col-sm-3 hidden-xs">
            <div class="category-list">
                <div class="box-category">
                    <h3 class="toggled relative">Danh mục</h3>
                    <ul class="list-unstyled parent" id="selectMe-desk">
                        <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id; ?>
                        <li class="has-more-category">
                            <a href="<?php echo $linkdm; ?>"
                               class="list-group-item main-item"><?php echo $name; ?><span class="toggled"></span></a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>

            <script><!--
                $(function () {
                    $(".parent .fa.fa-plus").remove();
                    $(".parent .toggled").append("<i class='fa fa-plus'></i>");
                    $('.parent .toggled').click(function (e) {
                        e.preventDefault();
                        if (!$(this).parent().hasClass('active')) {
                            $('+ ul', $('a.list-group-item.main-item')).slideUp();
                            $('a.list-group-item.main-item').removeClass('active');
                        }
                        $(this).parent().toggleClass('active');
                        $('+ ul', $(this).parent()).slideToggle('slow');
                        return false;
                    });
                });
                --></script>

            <div class="box all-products bestseller mt-80">
                <div class="container">
                    <div class="box-heading">
                        <div class="box-content">
                            <div class="page-title toggled"><h3>Best sellers</h3></div>
                            <div class="block_box row">
                                <div id="bestseller-carousel" class="box-product  product-carousel  clearfix"
                                     data-items="4">
                                    <?php
                                    foreach ($dstop_limit as $sp) {
                                    extract($sp);
                                    $hinh=$img_path.$img;
                                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                                    ?>
                                        <div class="product-layout  col-xs-12">
                                        <div class="product-thumb transition clearfix">
                                            <div class="image">
                                                <a href="<?php echo $linksp; ?>">
                                                    <img src="<?php echo $hinh; ?>"
                                                         alt="Half Hat" title="Half Hat" class="img-responsive" style="width: 300px; height: auto"/>
                                                    <img class="img-responsive hover-img"
                                                         src="<?php echo $hinh; ?>"
                                                         title="Half Hat" alt="Half Hat" style="width: 300px; height: auto"/>
                                                </a>
                                                <div class="sale-text"><span class="section-sale">-10%</span></div>
                                                <div class="button-group">
                                                    <form action="index.php?act=addtocart" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                                                        <input type="hidden" name="img" value="<?php echo $img; ?>">
                                                        <input type="hidden" name="giamoi" value="<?php echo $giamoi; ?>">
                                                        <div class="buy-price btn-group">
                                                            <button type="submit" class="addcart btn btn-primary btn-lg btn-block" name="addtocart" data-toggle="tooltip" title="Add to Cart"
                                                                    value="Add to card" style="border-radius: 100%"><i class="fa fa-cart-plus"></i></button>
                                                            <button type="button" data-toggle="tooltip" class="quickview-button"
                                                                    title="Quickview">
                                                                <a href="<?php echo $linksp; ?>" style="color: inherit;"><i class="fa fa-eye"></i></a></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="thumb-description clearfix">
                                                <div class="caption">
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span></div>
                                                    <h4 class="product-title"><a
                                                                href="<?php echo $linksp; ?>"><?php echo $name; ?></a></h4>
                                                    <p class="price">
                                                        <span class="price-new"><?php echo $giamoi; ?> đ</span>
                                                        <span class="price-old"><?php echo $giacu; ?> đ</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-viewport">
                <div id="banner0" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#"><img
                                        src="https://opencart.mahardhi.com/MT06/wearzo/04/image/cache/catalog/banners/cat-leftbanner-282x440.jpg"
                                        alt="Left Banner" class="img-responsive"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <script><!--
                if ($('#banner0 .swiper-slide').length > 1) {
                    $('#banner0').swiper({
                        effect: 'fade',
                        autoplay: 2500,
                        autoplayDisableOnInteraction: false
                    });
                }
                --></script>

        </aside>

        <div id="content" class="col-sm-9">
            <h2 class="page_title">Shop</h2>

            <div class="refine-search">
                <h3 class="refine-text">Fillter</h3>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="cat-name">
                            <?php
                            foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm="index.php?act=sanpham&iddm=".$id;
                            $sql1= "select count(*) as sl from sanpham where iddm = ".$id."";
                            $count = pdo_query($sql1);
                            ?>
                            <li>
                                <a href="<?php echo $linkdm; ?>"><?php echo $name; ?>
                                    (<?php echo $count[0]['sl']; ?>)</a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="cat_info">
                <div class="row">
                    <div class="col-sm-2 col-xs-5 cat_list_gird">
                        <div class="btn-group btn-group-sm">
                            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip"
                                    title="Grid"><i class="fa fa-columns"></i></button>
                            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip"
                                    title="List"><i class="fa fa-list"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_GET['img'])) {
                echo '
                        <h1>Sản phẩm cần tìm kiếm</h1>

                    ';
                //     <div class="img" style="text-align: center; margin-bottom: 10px">
                //     <a href="#"><img src='.$_GET['img'].'  width="200"  height="200" alt=""></a>
                // </div>
            } else {
                echo '<h1>Sản phẩm</h1>';
            }
            $img = NULL;
            ?>
            <div class="row category-row card-content">
            <?php
                foreach ($dssp as $sp) {
                extract($sp);
                $hinh=$img_path.$img;
                $linksp="index.php?act=sanphamct&idsp=".$id;
                ?>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb img_pro">
                        <div class="image">
                            <a href="<?php echo $linksp; ?>">
                                <img src="<?php echo $hinh; ?>"
                                     alt="Analog Watch" title="Analog Watch" class="img-responsive"/>
                                <img class="img-responsive hover-img"
                                     src="<?php echo $hinh; ?>"
                                     title="Analog Watch" alt="Analog Watch"/>
                            </a>
                            <div class="button-group">
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                                    <input type="hidden" name="img" value="<?php echo $img; ?>">
                                    <input type="hidden" name="giamoi" value="<?php echo $giamoi; ?>">
                                    <div class="buy-price btn-group">
                                        <button type="submit" class="addcart btn btn-primary btn-lg btn-block" name="addtocart" data-toggle="tooltip" title="Add to Cart"
                                                value="Add to card" style="border-radius: 100%"><i class="fa fa-cart-plus"></i></button>
                                        <button type="button" data-toggle="tooltip" class="quickview-button"
                                                title="Quickview">
                                            <a href="<?php echo $linksp; ?>" style="color: inherit;"><i class="fa fa-eye"></i></a></button>
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
                                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                <h4 class="product-title"><a
                                            href="<?php echo $linksp; ?>"><?php echo $name; ?></a></h4>
                                <p class="price">
                                    <?php echo $giamoi; ?>
                                </p>
                                <p class="description">.</p>
                                <div class="all-btn">
                                    <form action="index.php?act=addtocart" method="post">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                                        <input type="hidden" name="img" value="<?php echo $img; ?>">
                                        <input type="hidden" name="giamoi" value="<?php echo $giamoi; ?>">
                                        <div class="buy-price btn-group">
                                            <button type="submit" class="addcart btn btn-primary btn-lg btn-block" name="addtocart" data-toggle="tooltip" title="Add to Cart"
                                                    value="Add to card">Add to Cart</button>
                                        </div>
                                    </form>
<!--                                    <button type="button" class="addcart" title="Add to Cart" onclick="cart.add('41')">-->
<!--                                        Add to Cart-->
<!--                                    </button>-->
<!--                                    <div class="button-group btn-list">-->
<!--                                        <button type="button" data-toggle="tooltip" class="quickview-button"-->
<!--                                                title="Quickview"-->
<!--                                                onclick="quickView.ajaxView('?route=product/quickview&product_id=41');">-->
<!--                                            <i class="fa fa-eye"></i></button>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="pagination">

                </div>
            </div>
<!--            <div class="pro_pagination">-->
<!--                <div class="row">-->
<!--                    <div class="col-sm-6 text-left">Showing 1 to 12 of 18 (2 Pages)</div>-->
<!--                    <div class="col-sm-6 text-right">-->
<!--                        <ul class="pagination">-->
<!--                            <li class="active"><span>1</span></li>-->
<!--                            <li>-->
<!--                                <a href="#">2</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">&gt;</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">&gt;|</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <script type="text/javascript">
                function getPageList(totalPages, page, maxLength) {
                    function range(start, end) {
                        return Array.from(Array(end - start + 1), (_, i) => i + start);
                    }

                    var sideWidth = maxLength < 9 ? 1 : 2;
                    var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
                    var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

                    if (totalPages <= maxLength) {
                        return range(1, totalPages);
                    }

                    if (page <= maxLength - sideWidth - 1 - rightWidth) {
                        return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
                    }

                    if (page >= totalPages - sideWidth - 1 - rightWidth) {
                        return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
                    }

                    return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
                }

                $(function () {
                    var numberOfItems = $(".card-content .img_pro").length;
                    var limitPerPage = 8; //How many card items visible per a page
                    var totalPages = Math.ceil(numberOfItems / limitPerPage);
                    var paginationSize = 7; //How many page elements visible in the pagination
                    var currentPage;

                    function showPage(whichPage) {
                        if (whichPage < 1 || whichPage > totalPages) return false;

                        currentPage = whichPage;

                        $(".card-content .img_pro").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

                        $(".pagination li").slice(1, -1).remove();

                        getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                            $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
                                .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
                                .attr({
                                    href: "javascript:void(0)"
                                }).text(item || "...")).insertBefore(".next-page");
                        });

                        $(".previous-page").toggleClass("disable", currentPage === 1);
                        $(".next-page").toggleClass("disable", currentPage === totalPages);
                        return true;
                    }

                    $(".pagination").append(
                        $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({
                            href: "javascript:void(0)"
                        }).text("<")),
                        $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({
                            href: "javascript:void(0)"
                        }).text(">"))
                    );

                    $(".card-content").show();
                    showPage(1);

                    $(document).on("click", ".pagination li.current-page:not(.active)", function () {
                        return showPage(+$(this).text());
                    });

                    $(".next-page").on("click", function () {
                        return showPage(currentPage + 1);
                    });

                    $(".previous-page").on("click", function () {
                        return showPage(currentPage - 1);
                    });
                });
            </script>
            <script src="../views/js/sanPham.js"></script>
        </div>

    </div>
</div>