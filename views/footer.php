<!--New===============-->
<footer class="mt-80">
    <div class="container">
        <div class="row">
            <div class="footer-top clearfix">
                <div class="col-sm-2">
                    <div class="footer-content">
                        <h5>Main Menu</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="index.php">Trang chủ</a></li>
                            <li>
                                <a href="index.php?act=sanpham">Sản phẩm</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footer-content">
                        <h5>Liên kết</h5>
                        <ul class="list-unstyled">
                            <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                            <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                            <li><a href="index.php?act=tintuc">Tin tức</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 footer-center hidden-sm hidden-xs">
                    <div class="position-footer-center">
                        <div class="testimonial-block">
                            <div class="testimonial-container box-module">
                                <div class="page-title"><h3>đánh giá</h3></div>
                                <div class="owl-container">
                                    <div class="block-content">
                                        <div class="slideTestimonial owl-carousel owl-theme">
                                            <div class="row-items">
                                                <div class="testimonial-images">
                                                    <img src="https://opencart.mahardhi.com/MT06/wearzo/04/image/cache/catalog/testimonial/1-80x80.jpg"
                                                         alt="John Deo" class="m-image-auto m-auto">
                                                </div>
                                                <div class="testimonial-text"><p>Sản phẩm tuyệt vời, chất lượng tốt
                                                    </p></div>
                                                <div class="testimonial-content">
                                                    <div class="testimonial-author">Phạm Thảo,</div>
                                                    <div class="testimonial-customer">Customer</div>
                                                </div>
                                            </div>

                                            <div class="row-items">
                                                <div class="testimonial-images">
                                                    <img src="https://opencart.mahardhi.com/MT06/wearzo/04/image/cache/catalog/testimonial/2-80x80.jpg"
                                                         alt="Luies Charles" class="m-image-auto m-auto">
                                                </div>
                                                <div class="testimonial-text"><p>Sản phẩm phù hợp với giá tiền
                                                    </p></div>
                                                <div class="testimonial-content">
                                                    <div class="testimonial-author">Mai Anh,</div>
                                                    <div class="testimonial-customer">Customer</div>
                                                </div>
                                            </div>

                                            <div class="row-items">
                                                <div class="testimonial-images">
                                                    <img src="https://opencart.mahardhi.com/MT06/wearzo/04/image/cache/catalog/testimonial/3-80x80.jpg"
                                                         alt="Michael Jack" class="m-image-auto m-auto">
                                                </div>
                                                <div class="testimonial-text"><p>Sản phẩm chất lượng, sẽ ủng hộ shop lâu
                                                        dài
                                                    </p></div>
                                                <div class="testimonial-content">
                                                    <div class="testimonial-author">Hoa Nguyễn,</div>
                                                    <div class="testimonial-customer">Customer</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            const direct = $('html').attr('dir');
                            const items = 1;
                            $(".slideTestimonial").each(function () {
                                const sliderOptions = {
                                    loop: false,
                                    nav: false,
                                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                                    dots: true,
                                    items: items,
                                    autoplay: true,
                                    autoplayTimeout: 3000,
                                    responsiveRefreshRate: 200,
                                    responsive: {
                                        0: {items: 1},
                                        1201: {items: 1}
                                    }
                                };

                                if (direct == 'rtl') sliderOptions['rtl'] = true;
                                $(this).owlCarousel(sliderOptions);
                            });
                        </script>
                    </div>
                </div>
                <div class="col-sm-4 footer-right">
                    <div class="position-footer-right">
                        <h5 class="toggled title">liên hệ</h5>
                        <ul class="list-unstyled">
                            <li>
                                <div class="site">
                                    <div class="contact_title">address:</div>
                                    <div class="contact_site">Số 141, Chiến Thắng, Xã Tân Triều, Huyện Thanh Trì, Hà Nội
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="phone">
                                    <div class="contact_title">phone:</div>
                                    <div class="contact_site">0789349465</div>
                                </div>
                            </li>
                            <li>
                                <div class="email">
                                    <div class="contact_title">email:</div>
                                    <div class="contact_site"><a href="mailto:info@Yourstore.com">Rable@gmail.Com</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <p class="powered">Powered By <a href="http://www.opencart.com"> Đồ án tốt nghiệp</p>
                <div class="position-footer-bottom">
                    <div class="social-media">
                        <a href="https://www.facebook.com/home.php"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
                    </div>
                    <div class="payment-link"><img src="image/catalog/payment.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- top scroll -->
<a href="#" class="scrollToTop back-to-top" data-toggle="tooltip" title="Top"><i class="fa fa-angle-up"></i></a>
</body>
</html>
