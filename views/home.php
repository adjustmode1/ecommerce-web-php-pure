    <!-- <div class="bietEm">
    <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/642699891&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/music-1-beat" title="Music Beat" target="_blank" style="color: #cccccc; text-decoration: none;">Music Beat</a> · <a href="https://soundcloud.com/music-1-beat/stephanie-poetri-i-love-you-3000" title="Stephanie Poetri - I Love You 3000" target="_blank" style="color: #cccccc; text-decoration: none;">Stephanie Poetri - I Love You 3000</a></div>
        </div> -->
<!--    New =============================================-->
    <div id="common-home">
        <div class="slideshow">
            <div class="swiper-viewport">
                <div id="slideshow0" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center Main-banner1">
                            <a href="#"><img
                                        src="./imgTaiNguyen/b1.jpg"
                                        alt="Main-banner1" class="img-responsive"/></a>
                        </div>
                        <div class="swiper-slide text-center Main-banner2">
                            <a href="#"><img
                                        src="./imgTaiNguyen/b2.jpg"
                                        alt="Main-banner2" class="img-responsive"/></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination slideshow0"></div>
                <div class="swiper-pager">
                    <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                    <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <script><!--
            setTimeout(function () {
                $('#slideshow0').swiper({
                    mode: 'horizontal',
                    slidesPerView: 1,
                    pagination: '.slideshow0',
                    paginationClickable: true,
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    spaceBetween: 0,
                    autoplay: 4000,
                    autoplayDisableOnInteraction: true,
                    loop: true
                });
            }, 500);
            --></script>

        <div class="category-featured mt-80 clearfix">
            <div class="container">
                <div class="box-heading hidden"><h3>The Collection</h3></div>
                <div class="category-box">
                    <div class="row">
                        <div class="category-feature-list">
                            <div id="category-carousel" class="box-category category-carousel clearfix">
                                <div class="category-layout col-xs-12">
                                    <div class="category-thumb">
                                        <div class="images-hover image">
                                            <a href="index.php?act=sanpham&iddm=1">
                                                <img src="./imgTaiNguyen/c2.jpg"
                                                     alt="Clothing" title="Clothing" class="img-responsive"/>
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4>
                                                    <a href="index.php?act=sanpham&iddm=1">Quần áo nam</a>
                                                </h4>
                                            </div>
                                            <div class="number-product">19 items</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-layout col-xs-12">
                                    <div class="category-thumb">
                                        <div class="images-hover image">
                                            <a href="index.php?act=sanpham&iddm=3">
                                                <img src="./imgTaiNguyen/c1.jpg"
                                                     alt="Footwear" title="Footwear" class="img-responsive"/>
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4>
                                                    <a href="index.php?act=sanpham&iddm=3">Phụ kiện</a>
                                                </h4>
                                            </div>
                                            <div class="number-product">18 items</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-layout col-xs-12">
                                    <div class="category-thumb">
                                        <div class="images-hover image">
                                            <a href="index.php?act=sanpham&iddm=9">
                                                <img src="./imgTaiNguyen/c3.jpg"
                                                     alt="Dresses" title="Dresses" class="img-responsive"/>
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4>
                                                    <a href="index.php?act=sanpham&iddm=9">Quần áo trẻ em</a>
                                                </h4>
                                            </div>
                                            <div class="number-product">18 items</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-layout col-xs-12">
                                    <div class="category-thumb">
                                        <div class="images-hover image">
                                            <a href="index.php?act=sanpham&iddm=2">
                                                <img src="./imgTaiNguyen/image1.png"
                                                     alt="Dresses" title="Dresses" class="img-responsive"/>
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4>
                                                    <a href="index.php?act=sanpham&iddm=2">Quần áo nữ</a>
                                                </h4>
                                            </div>
                                            <div class="number-product">18 items</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script><!--
            // set slider
            const dirCategory = $('html').attr('dir');
            $('.category-carousel').each(function () {
                if ($(this).closest('#column-left').length == 0 && $(this).closest('#column-right').length == 0) {
                    $(this).addClass('owl-carousel owl-theme');
                    const items = $(this).data('items') || 3;
                    const sliderOptions = {
                        loop: false,
                        rewind: true,
                        nav: true,
                        navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
                        dots: false,
                        items: items,
                        autoplay: false,
                        autoplayTimeout: 3000,
                        responsiveRefreshRate: 200,
                        responsive: {
                            0: {items: 1},
                            481: {items: 2},
                            1200: {items: items}
                        }
                    };
                    if (dirCategory == 'rtl') sliderOptions['rtl'] = true;
                    $(this).owlCarousel(sliderOptions);
                }
            });
            //--></script>
        <div class="banner-outer html1 col-md-6 col-xs-12 clearfix">
            <div class="html1-inner clearfix">
                <div class="banner1 banners">
                    <div class="inner1"><a href="#"><img src="./imgTaiNguyen/slideshow2.jpg" alt=""
                                                         class="img-responsive"></a></div>
                    <div class="inner2">
                        <div class="promo-text-box"><h3 class="promo-title">Women Tops</h3>
                            <div class="promo-sale">Up to 70% off on selected item</div>
                        </div>
                        <a href="index.php?act=sanpham" class="btn button">Shop Now</a></div>
                </div>
            </div>
        </div>
        <div class="box all-products latest combo col-md-6 col-xs-12">
            <div class="box-heading">
                <div class="box-content">
                    <div class="page-title toggled"><h3>Sản phẩm mới</h3></div>
                    <div class="block_box row">
                        <div id="latest-carousel" class="box-product  combo-carousel  clearfix" data-items="1">
                            <?php
                            foreach ($spnew as $sp) {
                                extract($sp);
                                $hinh=$img_path.$img;
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                            ?>
                            <div class="product-layout  col-xs-12">
                                <div class="product-thumb transition clearfix">
                                    <div class="image">
                                        <a href="<?php echo $linksp; ?>">
                                            <img src="<?php echo $hinh; ?>"
                                                 alt="Leather Bag" title="Leather Bag" class="img-responsive"/>
                                            <img class="img-responsive hover-img"
                                                 src="<?php echo $hinh; ?>g"
                                                 title="Leather Bag" alt="Leather Bag"/>
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
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-title"><a
                                                        href="<?php echo $linksp; ?>"><?php echo $name; ?></a></h4>
                                            <p class="price">
                                                <?php echo $giamoi; ?> đ
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
        <div class="box all-products special combo col-md-6 col-xs-12">
            <div class="box-heading">
                <div class="box-content">
                    <div class="page-title toggled"><h3>Sản phẩm nổi bật</h3></div>
                    <div class="block_box row">
                        <div id="special-carousel" class="box-product  combo-carousel  clearfix" data-items="1">
                        <?php
                            foreach ($dstop as $sp) {
                                extract($sp);
                                $hinh=$img_path.$img;
                                $linksp = "index.php?act=sanphamct&idsp=".$id;
                                ?>
                                <div class="product-layout  col-xs-12">
                                <div class="product-thumb transition clearfix">
                                    <div class="image">
                                        <a href="<?php echo $linksp; ?>">
                                            <img src="<?php echo $hinh; ?>"
                                                 alt="Beret Cap" title="Beret Cap" class="img-responsive"/>
                                            <img class="img-responsive hover-img"
                                                 src="<?php echo $hinh; ?>"
                                                 title="Beret Cap" alt="Beret Cap"/>
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
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span></div>
                                            <h4 class="product-title"><a href="<?php echo $linksp; ?>"><?php echo $name; ?></a></h4>
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

        <div class="banner-outer html2 col-md-6 col-xs-12 clearfix">
            <div class="html2-inner clearfix">
                <div class="banner2 banners">
                    <div class="inner1"><a href="#"><img src="./imgTaiNguyen/slideshow2.jpg" alt=""
                                                         class="img-responsive"></a></div>
                    <div class="inner2">
                        <div class="promo-text-box"><h3 class="promo-title">Men Shirts</h3>
                            <div class="promo-sale">Up to 70% off on selected item</div>
                        </div>
                        <a href="index.php?act=sanpham" class="btn button">Shop Now</a></div>
                </div>
            </div>
        </div>
        <div class="product-tab-block mt-80 box">
            <!-- <div class="container"> -->
            <div class="main-tab">
                <div class="product-tabs box-content clearfix">
                    <div id="tabs" class="mahardhi-tabs section">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#tab-bestseller" data-toggle="tab"
                                   class="selected"><span>Bestseller</span></a>
                            </li>
                            <li>
                                <a href="#tab-featured" data-toggle="tab"><span>Featured</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="all-content">
                        <div class="row">
                            <div class="tab-content block_box">
                                <div id="tab-featured" class="tab-pane">
                                    <div id="featuredTabCarousel" class="box-product  product-tab-carousel  clearfix"
                                         data-items="5">
                                        <?php
                                        foreach ($dstop as $sp) {
                                        extract($sp);
                                        $hinh=$img_path.$img;
                                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                                        ?>
                                        <div class="product-layout col-xs-12">
                                            <div class="product-thumb transition">
                                                <div class="image">
                                                    <a href="<?php echo $linksp; ?>">
                                                        <img src="<?php echo $hinh; ?>"
                                                             alt="Jeans" title="Jeans" class="img-responsive"/>
                                                        <img class="img-responsive hover-img"
                                                             src="<?php echo $hinh; ?>"
                                                             title="Jeans" alt="Jeans"/>
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
                                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <h4 class="product-title"><a
                                                                    href="<?php echo $linksp; ?>"><?php echo $name; ?></a>
                                                        </h4>
                                                        <p class="price">
                                                            <?php echo $giamoi; ?> đ
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>


                                <div id="tab-bestseller" class="tab-pane">
                                    <div id="bestsellerTabCarousel" class="box-product  product-tab-carousel  clearfix"
                                         data-items="5">
                                        <?php
                                        foreach ($spnew as $sp) {
                                        extract($sp);
                                        $hinh=$img_path.$img;
                                        $linksp="index.php?act=sanphamct&idsp=".$id;
                                        ?>
                                        <div class="product-layout col-xs-12">
                                            <div class="product-thumb transition">
                                                <div class="image">
                                                    <a href="<?php echo $linksp; ?>">
                                                        <img src="<?php echo $hinh; ?>"
                                                             alt="Half Hat" title="Half Hat" class="img-responsive"/>
                                                        <img class="img-responsive hover-img"
                                                             src="<?php echo $hinh; ?>"
                                                             title="Half Hat" alt="Half Hat"/>
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
                                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
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
            </div>
            <!-- </div> -->
        </div>

        <script type="text/javascript">
            $('#tabs a').tabs();

            const direc = $('html').attr('dir');
            setTimeout(function () {
                $('.product-tab-carousel').each(function () {
                    if ($(this).closest('#column-left').length == 0 && $(this).closest('#column-right').length == 0) {
                        $(this).addClass('owl-carousel owl-theme');
                        const items = $(this).data('items') || 5;
                        const sliderOptions = {
                            loop: false,
                            rewind: false,
                            autoplay: false,
                            autoplayTimeout: 3000,
                            nav: false,
                            mouseDrag: true,
                            touchDrag: true,
                            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                            dots: true,
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
                        if (direc == 'rtl') sliderOptions['rtl'] = true;
                        $(this).owlCarousel(sliderOptions);
                    }
                });
            }, 500);
        </script>

        <div class="box mblog section mt-80">
            <div class="container">
                <div class="box-content">
                    <div class="page-title section"><h3>Tin tức</h3></div>
                    <div class="block_box row">
                        <div id="blogcarousel" class="blogs-block  blog-carousel1  clearfix" data-items="3">


                            <div class="blog-block product-layout  col-xs-12">
                                <div class="item">
                                    <div class="blog-info">
                                        <div class="image">
                                            <a href="index.php?act=tintuc"><img
                                                        src="https://opencart.mahardhi.com/MT06/wearzo/04/image/cache/catalog/blogs/blog1-490x327.jpg"
                                                        alt="" title="Consectetur adipiscing" class="img-responsive"/></a>
                                        </div>

                                    </div>
                                    <div class="caption">
                                        <div class="link_info">
                                            <span class="block-date"><i class="fa fa-calendar-o"></i>06 April 2022</span>

                                            <span class="blog-comment"><i class="fa fa-comments-o"></i>2 Comments</span>
                                            <h4>
                                                <a href="index.php?act=tintuc">Bài viết 1</a></h4>
                                            <div class="blog-text">
                                                <span>Năng lượng từ biển cả luôn khơi gợi tinh thần viễn du và BST thời trang Nautical của Louis Vuitton dạt dào nguồn cảm hứng khơi xa ấy.
                                                    Những họa tiết đặc trưng phong cách thủy thủ,...</span>
                                            </div>
                                            <a class="blog-read btn"
                                                href="index.php?act=tintuc"
                                               title="Read more">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-block product-layout  col-xs-12">
                                <div class="item">
                                    <div class="blog-info">
                                        <div class="image">
                                            <a href="#"><img
                                                        src="https://opencart.mahardhi.com/MT06/wearzo/04/image/cache/catalog/blogs/blog3-490x327.jpg"
                                                        alt="" title="Lorem Ipsum Dolo" class="img-responsive"/></a>
                                        </div>

                                    </div>
                                    <div class="caption">
                                        <div class="link_info">
                                            <span class="block-date"><i class="fa fa-calendar-o"></i>06 April 2022</span>

                                            <span class="blog-comment"><i class="fa fa-comments-o"></i>1 Comments</span>
                                            <h4>
                                                <a href="index.php?act=tintuc">Bài viết 2</a></h4>
                                            <div class="blog-text">
                                                <span>Năng lượng từ biển cả luôn khơi gợi tinh thần viễn du và BST thời trang Nautical của Louis Vuitton dạt dào nguồn cảm hứng khơi xa ấy.
                                                    Những họa tiết đặc trưng phong cách thủy thủ,...</span>
                                            </div>
                                            <a class="blog-read btn"
                                               href="index.php?act=tintuc"
                                               title="Read more">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-block product-layout  col-xs-12">
                                <div class="item">
                                    <div class="blog-info">
                                        <div class="image">
                                            <a href="#"><img
                                                        src="https://opencart.mahardhi.com/MT06/wearzo/04/image/cache/catalog/blogs/blog4-490x327.jpg"
                                                        alt="" title="Nam nec rhoncus est" class="img-responsive"/></a>
                                        </div>

                                    </div>
                                    <div class="caption">
                                        <div class="link_info">
                                            <span class="block-date"><i class="fa fa-calendar-o"></i>06 April 2022</span>

                                            <span class="blog-comment"><i class="fa fa-comments-o"></i>1 Comments</span>
                                            <h4>
                                                <a href="index.php?act=tintuc">Bài viết 3</a></h4>
                                            <div class="blog-text">
                                                <span>Năng lượng từ biển cả luôn khơi gợi tinh thần viễn du và BST thời trang Nautical của Louis Vuitton dạt dào nguồn cảm hứng khơi xa ấy.
                                                    Những họa tiết đặc trưng phong cách thủy thủ,...</span>
                                            </div>
                                            <a class="blog-read btn"
                                               href="index.php?act=tintuc"
                                               title="Read more">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                const direc = $('html').attr('dir');

                $('.blog-carousel1').each(function () {
                    if ($(this).closest('#column-left').length == 0 && $(this).closest('#column-right').length == 0) {
                        $(this).addClass('owl-carousel owl-theme');
                        const items = $(this).data('items') || 3;
                        const sliderOptions = {
                            loop: false,
                            nav: true,
                            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                            dots: false,
                            items: items,
                            responsiveRefreshRate: 200,
                            responsive: {
                                0: {items: 1},
                                541: {items: 2},
                                1200: {items: items}
                            }
                        };
                        if (direc == 'rtl') sliderOptions['rtl'] = true;
                        $(this).owlCarousel(sliderOptions);
                    }
                });
            });
        </script>
        <div class="service-box clearfix mt-50">
            <div class="col-center">
                <div class="row">
                    <div class="promo-items clearfix">
                        <div class="service-item col-xs-3">
                            <div class="service">
                                <div class="service-icon"><i class="fa fa-car"></i></div>
                                <div class="service-content"><h4 class="promo-title">Miễn phí ship</h4></div>
                            </div>
                        </div>
                        <div class="service-item col-xs-3">
                            <div class="service">
                                <div class="service-icon"><i class="fa fa-arrow-circle-left"></i></div>
                                <div class="service-content"><h4 class="promo-title">Đổi trả Free</h4></div>
                            </div>
                        </div>
                        <div class="service-item col-xs-3">
                            <div class="service">
                                <div class="service-icon"><i class="fa fa-lock"></i></div>
                                <div class="service-content"><h4 class="promo-title">100% Bảo mật</h4></div>
                            </div>
                        </div>
                        <div class="service-item col-xs-3">
                            <div class="service">
                                <div class="service-icon"><i class="fa fa-phone-volume"></i></div>
                                <div class="service-content"><h4 class="promo-title">Hỗ trợ online 24/7</h4></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news mt-80">
            <div class="container">
                <div class="newsletterblock">
                    <div class="newsletter-form block-content clearfix">
                        <div class="news-info">
                            <div class="news-dec">
                                <div class="page-title section"><h3>Mua sắm ngay!</h3></div>
                                <div class="news-description">Những trải nghiệm tuyệt vời đang chờ ban.
                                </div>
                            </div>
                        </div>
                        <!-- newsletter box -->

                        <!-- newsletter box -->
                    </div>
                </div>
            </div>
        </div>
        <script>

            //add
            function subscribe() {
                $.ajax({
                    type: 'post',
                    url: 'index.php?route=extension/module/mahardhi_newsletter/subscribe',
                    dataType: 'html',
                    data: $("#frmnewsletter").serialize(),
                    success: function (html) {
                        try {
                            eval(html);
                        } catch (e) {
                        }
                    }
                });
            }

            // check for validation
            $(document).ready(function () {
                $('#newsletter_usr_email').keypress(function (e) {
                    if (e.which == 13) {
                        e.preventDefault();
                        subscribe();
                    }
                });
            });
            //--></script>

    </div>
<!--    End New =============================================-->
