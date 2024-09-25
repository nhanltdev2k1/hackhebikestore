<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a
        href='https://faugetglass.site/'>Best polarized sunglasses</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a
        href='https://faugetglass.site/'>Affordable designer sunglasses</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a
        href='https://faugetglass.site/'>Stylish transition glasses for men</a></h2>
<?php
include('phantrang/phantrang_dichvu.php');
?>

<body>
    <div class="page-wrapper">
        <main class="main">
            <div class="category-banner-container bg-gray">
                <div class="container">
                    <div class="category-banner banner p-0">
                        <div class="row align-items-center no-gutters m-0 text-center text-lg-left">
                            <div
                                class="col-md-4 col-xl-2 offset-xl-2 d-flex justify-content-center justify-content-lg-start my-5 my-lg-0">
                                <div class="d-flex flex-column justify-content-center">
                                    <p class="home-slide-h4 text-light text-uppercase m-b-1">Extra</p>
                                    <p class="home-slide-h2 text-uppercase m-b-1" style="font-size: 3.3125em;">20% off
                                    </p>
                                    <p class="heading-border-h4 font-weight-bold text-uppercase heading-border m-b-3">
                                        BIKES</p>

                                </div>
                            </div>
                            <div class="col-md-5 col-lg-4 text-md-center my-5 my-lg-0"
                                style="background-image: url(hinhmenu/banner/shop-banner-bg.png);">
                                <img class="d-inline-block" src="hinhmenu/banner/shop-banner.png" alt="banner"
                                    width="400" height="242">
                            </div>
                            <div class="col-md-3 my-5 my-lg-0">
                                <p class="home-slide-h3 font5 m-b-5">Summer Sale</p>
                                <a href="#" class="btn btn-teritary btn-lg ml-0">Shop All Sale</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </div>
            </nav>

            <div class="container">
                <div class="row main-content">
                    <div class="col-lg-9">
                        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                            <div class="toolbox-left">
                                <a href="#" class="sidebar-toggle"><svg data-name="Layer 3" id="Layer_3"
                                        viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                                        <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                                        <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                                        <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                                        <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                                        <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                                        <path
                                            d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                            class="cls-2"></path>
                                        <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2">
                                        </path>
                                        <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                        <path
                                            d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                            class="cls-2"></path>
                                    </svg>
                                    <span>Filter</span>
                                </a>

                                <div class="toolbox-item toolbox-sort">
                                    <label>Filter:</label>

                                    <div class="select-custom">
                                        <select name="orderby" class="form-control"
                                            onchange="if (this.value) window.location.href=this.value">
                                            <option value="" selected="selected">Select Type</option>
                                            <?php
                                            require('db.php');
                                            $tv1 = "SELECT * FROM loai_ma_sanpham ORDER BY id ASC";
                                            $tv_11 = mysqli_query($link, $tv1);
                                            while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                                $name_url = strtolower($tv_21['name_url']);
                                                $thuocloai = $tv_21['thuocloai'];
                                            ?>
                                            <option value="category/<?php echo $name_url; ?>"><?php echo $thuocloai; ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div><!-- End .select-custom -->


                                </div><!-- End .toolbox-item -->
                            </div><!-- End .toolbox-left -->

                            <div class="toolbox-right">
                                <div class="toolbox-item toolbox-show">
                                    <label>Show:</label>

                                    <div class="select-custom">
                                        <select name="count" class="form-control">
                                            <option value="12">12</option>
                                            <option value="24">24</option>
                                            <option value="36">36</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                </div><!-- End .toolbox-item -->

                                <div class="toolbox-item layout-modes">
                                    <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                        <i class="icon-mode-grid"></i>
                                    </a>
                                    <a href="category-list.html" class="layout-btn btn-list" title="List">
                                        <i class="icon-mode-list"></i>
                                    </a>
                                </div><!-- End .layout-modes -->
                            </div><!-- End .toolbox-right -->
                        </nav>

                        <div class="row">
                            <div class="col-6 col-sm-4 col-xl-3">
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
                            </div><!-- End .col-xl-3 -->
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default">
                                    <figure>
                                        <a href="demo27-product.html">
                                            <img src="assets/images/demoes/demo27/products/product-3.jpg" width="280"
                                                height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-35%</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo27-product.html">Green Bike</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$129.0 &ndash; $149.0</span>
                                        </div><!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="demo27-product.html" class="btn-icon btn-add-cart"><i
                                                    class="fa fa-arrow-right"></i><span>SELECT OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default">
                                    <figure>
                                        <a href="demo27-product.html">
                                            <img src="assets/images/demoes/demo27/products/product-1.jpg" width="280"
                                                height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo27-product.html">Black Bike</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$299.0</span>
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
                            </div><!-- End .col-xl-3 -->
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default">
                                    <figure>
                                        <a href="demo27-product.html">
                                            <img src="assets/images/demoes/demo27/products/product-6.jpg" width="280"
                                                height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-40%</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo27-product.html">Blue Bike</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$99.0</span>
                                            <span class="product-price">$59.0</span>
                                        </div><!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="demo27-product.html" class="btn-icon btn-add-cart"><i
                                                    class="fa fa-arrow-right"></i><span>SELECT OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default">
                                    <figure>
                                        <a href="demo27-product.html">
                                            <img src="assets/images/demoes/demo27/products/product-8.jpg" width="280"
                                                height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-17%</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo27-product.html">Bike Glasses</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$59.0</span>
                                            <span class="product-price">$49.0</span>
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
                            </div><!-- End .col-xl-3 -->
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default">
                                    <figure>
                                        <a href="demo27-product.html">
                                            <img src="assets/images/demoes/demo27/products/product-9.jpg" width="280"
                                                height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo27-product.html">Bike Frames</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$599.0</span>
                                        </div><!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="demo27-product.html" class="btn-icon btn-add-cart"><i
                                                    class="fa fa-arrow-right"></i><span>SELECT OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default">
                                    <figure>
                                        <a href="demo27-product.html">
                                            <img src="assets/images/demoes/demo27/products/product-4.jpg" width="280"
                                                height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-38%</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo27-product.html">White Bike</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$199.0</span>
                                            <span class="product-price">$129.0</span>
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
                            </div><!-- End .col-xl-3 -->
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default">
                                    <figure>
                                        <a href="demo27-product.html">
                                            <img src="assets/images/demoes/demo27/products/product-11.jpg" width="280"
                                                height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo27-product.html">Bike Accessories</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$299.0</span>
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
                            </div><!-- End .col-xl-3 -->
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default">
                                    <figure>
                                        <a href="demo27-product.html">
                                            <img src="assets/images/demoes/demo27/products/product-7.jpg" width="280"
                                                height="280" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo27-product.html">Bike Kit</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$55.0</span>
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
                            </div><!-- End .col-xl-3 -->
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default">
                                    <figure>
                                        <a href="demo27-product.html">
                                            <img src="assets/images/demoes/demo27/products/product-10.jpg" width="280"
                                                height="280" alt="product">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo27-product.html">Bike Chain</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$39.0</span>
                                        </div><!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                    class="icon-heart"></i></a>
                                            <a href="demo27-product.html" class="btn-icon btn-add-cart"><i
                                                    class="fa fa-arrow-right"></i><span>SELECT OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .col-xl-3 -->
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default">
                                    <figure>
                                        <a href="demo27-product.html">
                                            <img src="assets/images/demoes/demo27/products/product-5.jpg" width="280"
                                                height="280" alt="product">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo27-product.html">Casual Bike</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$101.0 &ndash; $111.0</span>
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
                            </div><!-- End .col-xl-3 -->
                            <div class="col-6 col-sm-4 col-xl-3">
                                <div class="product-default">
                                    <figure>
                                        <a href="demo27-product.html">
                                            <img src="assets/images/demoes/demo27/products/product-12.jpg" width="280"
                                                height="280" alt="product">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Category</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo27-product.html">Bike Backpack</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$59.0</span>
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
                            </div><!-- End .col-xl-3 -->
                        </div><!-- End .row -->

                        <nav class="toolbox toolbox-pagination mb-0">
                            <div class="toolbox-item toolbox-show">
                                <label class="mt-0">Show:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .toolbox-item -->

                            <ul class="pagination toolbox-item">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><span class="page-link">...</span></li>
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-1" role="button" aria-expanded="true"
                                        aria-controls="widget-body-1">Categories</a>
                                </h3>

                                <div class="collapse show" id="widget-body-1">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li>
                                                <a href="#widget-category-1" data-toggle="collapse" role="button"
                                                    aria-expanded="true"
                                                    aria-controls="widget-category-1">Accessories<span
                                                        class="products-count">(1)</span><span
                                                        class="toggle"></span></a>
                                                <div class="collapse show" id="widget-category-1">
                                                    <ul class="cat-sublist">
                                                        <li><a href="#">Bike Chains<span
                                                                    class="products-count">(1)</span></a></li>
                                                        <li><a href="#">Bike Frames<span
                                                                    class="products-count">(3)</span></a></li>
                                                        <li><a href="#">Bike Pedals<span
                                                                    class="products-count">(2)</span></a></li>
                                                        <li><a href="#">Bike Saddles<span
                                                                    class="products-count">(1)</span></a></li>
                                                        <li><a href="#">Bike Tools<span
                                                                    class="products-count">(3)</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Bikes<span class="products-count">(6)</span></a></li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-price">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true"
                                        aria-controls="widget-body-2">Price</a>
                                </h3>

                                <div class="collapse show" id="widget-body-2">
                                    <div class="widget-body pb-0">
                                        <form action="#">
                                            <div class="price-slider-wrapper">
                                                <div id="price-slider"></div><!-- End #price-slider -->
                                            </div><!-- End .price-slider-wrapper -->

                                            <div
                                                class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="filter-price-text">
                                                    Price:
                                                    <span id="filter-price-range"></span>
                                                </div><!-- End .filter-price-text -->

                                                <button type="submit" class="btn btn-primary">Filter</button>
                                            </div><!-- End .filter-price-action -->
                                        </form>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-color">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true"
                                        aria-controls="widget-body-3">Color</a>
                                </h3>

                                <div class="collapse show" id="widget-body-3">
                                    <div class="widget-body pb-0">
                                        <ul class="config-swatch-list">
                                            <li class="active">
                                                <a href="#" style="background-color: #000;">Black</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #0188cc;">Blue</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #81d742;">Green</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #eded65;">Yellow</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #6085a5;">Indigo</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #ab6e6e;">Red</a>
                                            </li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true"
                                        aria-controls="widget-body-4">Sizes</a>
                                </h3>

                                <div class="collapse show" id="widget-body-4">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li><a href="#">Extra Large</a></li>
                                            <li><a href="#">Large</a></li>
                                            <li><a href="#">Medium</a></li>
                                            <li><a href="#">Small</a></li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-featured pb-0">
                                <h3 class="widget-title">Featured Products</h3>

                                <div class="widget-body">
                                    <div class="featured-col">
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="demo27-product.html">
                                                    <img src="assets/images/demoes/demo27/products/small/product-1.jpg"
                                                        width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title">
                                                    <a href="demo27-product.html">Casual Bike</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:80%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$299.0</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="demo27-product.html">
                                                    <img src="assets/images/demoes/demo27/products/small/product-2.jpg"
                                                        width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title">
                                                    <a href="demo27-product.html">Bike Accessories</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:0%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$299.0</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div><!-- End .featured-col -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar-wrapper -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </main><!-- End .main -->
    </div>
</body>