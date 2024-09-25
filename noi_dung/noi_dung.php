<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://faugetglass.site/'>Best polarized sunglasses</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://faugetglass.site/'>Affordable designer sunglasses</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://faugetglass.site/'>Stylish transition glasses for men</a></h2>

<body>
    <div class="page-wrapper">
        <main class="main">
            <section class="popular-products">
                <div class="container">
                    <p class="section-title-home2 section-title appear-animate" data-animation-name="fadeInUpShorter"
                        data-animation-delay="200">Most Popular Products</p>
                    <div class="row">
                        <div class="products-slider 5col owl-carousel owl-theme appear-animate" data-owl-options="{
                            'margin': 0
                        }" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                            <?php
                            require('db.php');
                            // Prepared statement for improved security
                            $stmt = $link->prepare("SELECT * FROM (SELECT * FROM ma_sanpham WHERE noibat=1 ORDER BY id DESC LIMIT 100) AS recent_news ORDER BY RAND() LIMIT 6");
                            $stmt->execute();
                            $result = $stmt->get_result();

                            // Fetch data and display products
                            while ($row = $result->fetch_assoc()) {
                                $link_hinh = "HinhCTSP/HinhSanPham/" . htmlspecialchars($row['hinhanh']);
                                $tieude = htmlspecialchars($row['tieude']);
                                $url = htmlspecialchars($row['linkurl']);
                                $giagoc = '$' . number_format($row['giagoc'], 2, '.', ',');
                                $link = str_replace("?", "", strtolower("detail/$url"));
                            ?>
                                <div class="product-default">
                                    <figure>
                                        <a href="<?php echo $link; ?>">
                                            <img src="<?php echo $link_hinh; ?>" width="280"
                                                height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="home" class="product-category">Bike</a>
                                        </div>
                                        <p class="product-title p-product-title">
                                            <a href="<?php echo $link; ?>"><?php echo $tieude; ?></a>
                                        </p>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price"><?php echo $giagoc_formatted; ?></span>
                                        </div>
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="demo27-product.html"
                                                class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                            <a href="<?php echo $link; ?>" class="btn-quickviews"
                                                title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            $stmt->close();
                            ?>
                        </div>

                        <div class="categories-slider owl-carousel owl-theme mb-4 appear-animate" data-owl-options="{
                        'margin': 2,
                        'nav': false,
                        'items': 1,
                        'responsive': {
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5
                            }
                        }
                    }" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                            <div class="product-category">
                                <img src="hinhmenu/icon/icon-1.png" alt="icon" width="60" height="60">
                                <div class="category-content">
                                    <p class="icon-h3 font2 ls-0 text-uppercase mb-0">Bike Saddles</p>
                                </div>
                            </div>
                            <div class="product-category">
                                <img src="hinhmenu/icon/icon-2.png" alt="icon" width="60" height="60">
                                <div class="category-content">
                                    <p class="icon-h3 font2 ls-0 text-uppercase mb-0">Bike Pedals</p>
                                </div>
                            </div>
                            <div class="product-category">
                                <img src="hinhmenu/icon/icon-3.png" alt="icon" width="60" height="60">
                                <div class="category-content">
                                    <p class="icon-h3 font2 ls-0 text-uppercase mb-0">Bike Frames</p>
                                </div>
                            </div>
                            <div class="product-category">
                                <img src="hinhmenu/icon/icon-4.png" alt="icon" width="60" height="60">
                                <div class="category-content">
                                    <p class="icon-h3 font2 ls-0 text-uppercase mb-0">Bike Chains</p>
                                </div>
                            </div>
                            <div class="product-category">
                                <img src="hinhmenu/icon/icon-5.png" alt="icon" width="60" height="60">
                                <div class="category-content">
                                    <p class="icon-h3 font2 ls-0 text-uppercase mb-0">Bike Tools</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <div class="banners-section mb-4">
                <div class="row row-sm">
                    <div class="col-md-4">
                        <div class="banner banner1 appear-animate" data-animation-name="fadeIn"
                            data-animation-delay="200" style="background-color: #696f6f;">
                            <figure>
                                <img src="hinhmenu/banner/banner-hackhebike-01.webp" alt="banner" width="640"
                                    height="640">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="banner banner2 h-100"
                            style="background: #101010 no-repeat center/cover url(hinhmenu/banner/banner-hackhebike-02.webp);">
                            <p class=" banner2-h4 text-light text-uppercase mb-0 appear-animate"
                                data-animation-name="fadeInUpShorter" data-animation-delay="100">Get Ready</p>
                            <p class="banner2-h2 d-inline-block align-middle text-uppercase m-b-3 appear-animate"
                                data-animation-name="fadeInUpShorter" data-animation-delay="300">20% off</p><a
                                href="product"
                                class="btn btn-dark btn-lg align-middle m-b-3 appear-animate d-none d-sm-inline-block"
                                data-animation-name="fadeInUpShorter" data-animation-delay="300">Shop All Sale</a>
                            <p class=" banner2-h3 heading-border appear-animate" data-animation-name="fadeInUpShorter"
                                data-animation-delay="500">BIKES</p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="trendy-section mb-2">
                <div class="container">
                    <p class="section-title-home2 section-title appear-animate" data-animation-name="fadeInUpShorter"
                        data-animation-delay="200">Trending Accessories</p>

                    <div class="row appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                        <div class="products-slider 5col owl-carousel owl-theme" data-owl-options="{
                            'margin': 0
                        }">
                            <div class="product-default">
                                <figure>
                                    <a href="demo27-product.html">
                                        <img src="assets/images/demoes/demo27/products/product-2.jpg" width="280"
                                            height="280" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">-13%</div>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">Category</a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo27-product.html">Porto Fashion Bike</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$299.0</span>
                                        <span class="product-price">$259.0</span>
                                    </div><!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="demo27-product.html"
                                            class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview"
                                            title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div><!-- End .product-details -->

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 mb-2">
                                <div class="banner banner3 d-flex flex-wrap align-items-center bg-gray h-100 appear-animate"
                                    data-animation-name="fadeInRightShorter" data-animation-delay="100">
                                    <div class="col-sm-4 text-center">
                                        <h3 class="font5 mb-0">Summer Sale</h3>
                                        <h2 class="text-uppercase mb-0">20% off</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="assets/images/demoes/demo27/banners/banner-3.jpg" alt="banner" width="232"
                                            height="124">
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <a href="demo27-shop.html" class="btn btn-dark">Shop All Sale</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 mb-2">
                                <div class="banner banner4 d-flex flex-wrap align-items-center bg-primary h-100 appear-animate"
                                    data-animation-name="fadeInRightShorter" data-animation-delay="400">
                                    <div class="col-sm-4 text-center">
                                        <h3 class="font5 text-white mb-0">Flash Sale</h3>
                                        <h2 class="text-uppercase text-white mb-0">30% off</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="assets/images/demoes/demo27/banners/banner-4.jpg" alt="banner" width="232"
                                            height="124">
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <a href="demo27-shop.html" class="btn btn-light">Shop All Sale</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </main><!-- End .main -->

        <footer class="footer font2">
            <div class="footer-top">
                <div class="instagram-box bg-dark">
                    <div class="row m-0 align-items-center">
                        <div class="instagram-follow col-md-4 col-lg-3 d-flex align-items-center">
                            <div class="info-box">
                                <i class="fab fa-instagram text-white mr-4"></i>
                                <div class="info-box-content">
                                    <h4 class="text-white line-height-1">Follow Us on Instagram</h4>
                                    <p class="line-height-1">@portoecommerce</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-lg-9 p-0">
                            <div class="instagram-carousel owl-carousel owl-theme" data-owl-options="{
                                    'items': 2,
                                    'dots': false,
                                    'responsive': {
                                        '480': {
                                            'items': 3
                                        },
                                        '950': {
                                            'items': 4
                                        },
                                        '1200': {
                                            'items' : 5
                                        },
                                        '1500': {
                                            'items': 6
                                        }
                                    }
                                }">
                                <img src="assets/images/demoes/demo27/instagram/instagram1.jpg" alt="instagram"
                                    width="240" height="240">
                                <img src="assets/images/demoes/demo27/instagram/instagram2.jpg" alt="instagram"
                                    width="240" height="240">
                                <img src="assets/images/demoes/demo27/instagram/instagram3.jpg" alt="instagram"
                                    width="240" height="240">
                                <img src="assets/images/demoes/demo27/instagram/instagram4.jpg" alt="instagram"
                                    width="240" height="240">
                                <img src="assets/images/demoes/demo27/instagram/instagram5.jpg" alt="instagram"
                                    width="240" height="240">
                                <img src="assets/images/demoes/demo27/instagram/instagram6.jpg" alt="instagram"
                                    width="240" height="240">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="widget-newsletter d-lg-flex align-items-center flex-wrap">
                        <div class="footer-left d-md-flex flex-wrap align-items-center mr-5">
                            <div class="info-box w-auto mr-5 my-3">
                                <i class="far fa-envelope text-white mr-4"></i>
                                <div class="widget-newsletter-info">
                                    <h4 class="line-height-1 text-white">
                                        Get Special Offers and Savings
                                    </h4>
                                    <p class="line-height-1">Get all the latest information on Events,
                                        Sales
                                        and Offers.</p>
                                </div>
                            </div>
                            <form action="#" class="my-3">
                                <div class="footer-submit-wrapper d-flex">
                                    <input type="email" class="form-control font-italic"
                                        placeholder="Enter Your E-mail Address..." size="40" required>
                                    <button type="submit" class="btn btn-sm">Sign Up</button>
                                </div>
                            </form>
                        </div>
                        <div class="footer-right text-lg-right">
                            <div class="social-icons my-3">
                                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                                <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"></a>
                            </div><!-- End .social-icons -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="demo27.html"><img src="assets/images/logo-white.png" alt="Logo" class="logo"></a>

                            <p class="footer-desc">Lorem ipsum dolor sit amet, consectetur adipis.</p>

                            <div class="ls-0 footer-question mb-3">
                                <h6 class="mb-0 text-white">QUESTIONS?</h6>
                                <h3 class="mb-0 text-primary">1-888-123-456</h3>
                            </div>
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Account</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="links">
                                            <li><a href="dashboard.html">My Account</a></li>
                                            <li><a href="#">Track Your Order</a></li>
                                            <li><a href="#">Payment Methods</a></li>
                                            <li><a href="#">Shipping Guide</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="links">
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Product Support</a></li>
                                            <li><a href="#">Privacy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">About</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="links">
                                            <li><a href="about.html">About Porto</a></li>
                                            <li><a href="#">Our Guarantees</a></li>
                                            <li><a href="#">Terms And Conditions</a></li>
                                            <li><a href="#">Privacy policy</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="links">
                                            <li><a href="#">Return Policy</a></li>
                                            <li><a href="#">Intellectual Property Claims</a></li>
                                            <li><a href="#">Site Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-3">
                            <div class="widget text-lg-right">
                                <h4 class="widget-title">Features</h4>

                                <ul class="links">
                                    <li><a href="#">Powerful Admin Panel</a></li>
                                    <li><a href="#">Mobile &amp; Retina Optimized</a></li>
                                    <li><a href="#">Super Fast HTML Template</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div>
                <div class="footer-bottom">
                    <p class="footer-copyright text-lg-center mb-0">&copy; Porto eCommerce. 2021. All Rights
                        Reserved
                    </p>
                </div><!-- End .footer-bottom -->
            </div><!-- End .container -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
</body>