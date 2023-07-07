<ul class="breadcrumb">
    <li><a href="index.php">Trang chủ</a></li>
    <li><a href="index.php?act=tintuc">Tin tức</a>
    </li>
</ul>
<div id="content-blogs" class="container">
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
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                        title="Add To WishList" onclick="wishlist.add('35');"><i
                                                            class="icon-heart"></i></button>
                                                <div class="button-group">
                                                    <button type="button" class="addcart" data-toggle="tooltip"
                                                            title="Add to Cart" onclick="cart.add('35')"><i
                                                                class="icon-shopping-bag1"></i></button>
                                                    <button type="button" data-toggle="tooltip" class="quickview-button"
                                                            title="Quickview"
                                                            onclick="quickView.ajaxView('?route=product/quickview&product_id=35');">
                                                        <i class="icon-eye"></i></button>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            title="Add To Compare" onclick="compare.add('35');"><i
                                                                class="icon-change"></i></button>
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

    </aside>
        <div id="content" class="col-sm-9">
            <div class="">
                <div class="article-container">
                    <div class="image">
                        <ul class="thumbnails">
                            <li ><div class="thumbnail"><img src="https://opencart.mahardhi.com/MT06/wearzo/04/image/cache/catalog/blogs/blog1-1218x812.jpg" title="Consectetur adipiscing" alt="Consectetur adipiscing" /></div></li>
                        </ul>
                    </div>
                    <div class="caption-blog">
                        <span class="block-date">06 Apr 2022</span>
                        <h3 class="article-page-title">Thời trang và cuộc sống</h3>
                        <div class="singblog-description blog-text">
                            <span>Năng lượng từ biển cả luôn khơi gợi tinh thần viễn du và BST thời trang Nautical của Louis Vuitton dạt dào nguồn cảm hứng khơi xa ấy.
                                                    Những họa tiết đặc trưng phong cách thủy thủ,...</span></div>
                    </div>
                    <div class="shop-content mt-80">
                        <h3 class="leave-hedding">Comments</h3>
                        <div class="comment_cust">
                            <div class="commentlist">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul>
                                            <li class="comment-item">
                                                <div class="comment-text clearfix">
                                                    <div class="user_img"><i class="fa fa-user"></i></div>
                                                    <div class="comment-desc">
                                                        <div class="name-date">
                                                            <div class="name">Nguyễn Mai Anh</div>
                                                            <div class="date"> <i class="fa fa-clock-o"></i>  2022-04-06 09:29:28</div>
                                                        </div>
                                                        <div class="comment-dis">Bài viết rất bổ ích</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment-item">
                                                <div class="comment-text clearfix">
                                                    <div class="user_img"><i class="fa fa-user"></i></div>
                                                    <div class="comment-desc">
                                                        <div class="name-date">
                                                            <div class="name">Hoa Vũ</div>
                                                            <div class="date"> <i class="fa fa-clock-o"></i>  2022-04-06 09:29:38</div>
                                                        </div>
                                                        <div class="comment-dis">Bài viết rất hay và sáng <tạo></tạo>.</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

</div>