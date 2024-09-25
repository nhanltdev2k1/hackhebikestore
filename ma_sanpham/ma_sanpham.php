<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://faugetglass.site/'>Best polarized sunglasses</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://faugetglass.site/'>Affordable designer sunglasses</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://faugetglass.site/'>Stylish transition glasses for men</a></h2>
<?php
include('phantrang/phantrang_dichvu.php');
?>

<body>
    <div class="page-wrapper">
        <main class="main">
            <div class="category-banner home-slide-2 banner banner-sm-vw-xx d-flex justify-content-between bg-img bg-primary" style="background-image: url(hinhmenu/banner/banner-faugetglasses-category.webp);background-size: contain">
                <div class="banner-content banner-layer-left appear-animate" data-animation-name="fadeIn" data-animation-duration="1200" data-animation-delay="200">
                    <p class="text-white font3 font-weight-normal p-l-1 text-font-banner">Summer Trends</p>
                    <p class="text-white mb-0 text-left text-uppercase ml-0 ls-10 h3-text-white">sale</p>
                </div>
                <div class="banner-content banner-layer-right appear-animate" data-animation-name="fadeIn" data-animation-duration="1200" data-animation-delay="400">
                    <p class="text-white pl-2 font-weight-light text-left text-uppercase text-font-banner">prices up to</p>
                    <p class="text-white mb-0 text-sale m-l-n-xs text-left text-uppercase ml-0 h3-text-white">80%</p>
                </div>
            </div>

            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </div>
            </nav>

            <div class="container-fluid products-body mb-3">
                <nav class="toolbox sticky-header horizontal-filter filter-sorts" data-sticky-options="{'mobile': true}">
                    <div class="sidebar-overlay d-lg-none"></div>
                    <a href="#" class="sidebar-toggle border-0"><svg data-name="Layer 3" id="Layer_3"
                            viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                            <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                            <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                            <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                            <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                            <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                            <path d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                class="cls-2"></path>
                            <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                            <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                            <path d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                class="cls-2"></path>
                        </svg>
                        <span>Filter</span>
                    </a>

                    <aside class="toolbox-left sidebar-shop mobile-sidebar">
                        <div class="toolbox-item toolbox-sort select-custom">
                            <a class="sort-menu-trigger" href="#">Categories</a>
                            <ul class="sort-list cat-list">
                                <?php
                                require('db.php');
                                $tv1 = "SELECT * FROM loai_ma_sanpham ORDER BY id ASC LIMIT 6";
                                $tv_11 = mysqli_query($link, $tv1);
                                while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                    $id = $tv_21['id'];
                                    $thuocloai = $tv_21['thuocloai'];
                                    $name_url = strtolower($tv_21['name_url']);
                                ?>
                                    <li>
                                        <a href="category/<?php echo $name_url; ?>"><?php echo $thuocloai; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>


                        <div class="toolbox-item toolbox-sort select-custom">
                            <a class="sort-menu-trigger" href="#">Select Size</a>
                            <ul class="sort-list">
                                <li><a href="#">Extra Large</a></li>
                                <li><a href="#">Large</a></li>
                                <li><a href="#">Medium</a></li>
                                <li><a href="#">Small</a></li>
                            </ul>
                        </div>


                        <div class="toolbox-item toolbox-sort select-custom">
                            <a class="sort-menu-trigger" href="#">Select Color</a>
                            <ul class="sort-list">
                                <li><a href="#">Black</a></li>
                                <li><a href="#">Blue</a></li>
                                <li><a href="#">Brown</a></li>
                                <li><a href="#">Green</a></li>
                                <li><a href="#">Indigo</a></li>
                                <li><a href="#">Light Blue</a></li>
                                <li><a href="#">Red</a></li>
                                <li><a href="#">Yellow</a></li>
                            </ul>
                        </div>


                        <div class="toolbox-item toolbox-sort price-sort select-custom">
                            <a class="sort-menu-trigger" href="#">Select Price</a>
                            <div class="sort-list">
                                <form class="filter-price-form d-flex align-items-center m-0">
                                    <input class="input-price mr-2" name="min_price" placeholder="55" /> -
                                    <input class="input-price mx-2" name="max_price" placeholder="111" />
                                    <button type="submit" class="btn btn-primary ml-3">Filter</button>
                                </form>
                            </div>
                        </div>

                    </aside>
                    <!-- End .toolbox-left -->


                    <div class="toolbox-item toolbox-sort select-custom">
                        <select name="orderby" class="form-control">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </div>

                    <div class="toolbox-item toolbox-show ml-auto">
                        <label>Show:</label>

                        <div class="select-custom">
                            <select name="count" class="form-control">
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                        <!-- End .select-custom -->
                    </div>

                    <div class="toolbox-item layout-modes">
                        <a href="home" class="layout-btn btn-grid active" title="Grid">
                            <i class="icon-mode-grid"></i>
                        </a>
                        <a href="category-list.html" class="layout-btn btn-list" title="List">
                            <i class="icon-mode-list"></i>
                        </a>
                    </div>
                    <!-- End .layout-modes -->
                </nav>

                <div class="row">
                    <?php
                    require('db.php');
                    $p = new pager;
                    $limit = 25;
                    $start = $p->findStart($limit);

                    // Prepare and execute count query
                    $stmt = $link->prepare("SELECT COUNT(*) FROM ma_sanpham");
                    $stmt->execute();
                    $stmt->bind_result($count);
                    $stmt->fetch();
                    $stmt->close();

                    // Calculate pages
                    $pages = $p->findPages($count, $limit);

                    // Prepare and execute main query
                    $stmt = $link->prepare("SELECT * FROM ma_sanpham ORDER BY id DESC LIMIT ?, ?");
                    $stmt->bind_param('ii', $start, $limit);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($row = $result->fetch_assoc()) {
                        $link_hinh = "HinhCTSP/HinhSanPham/" . htmlspecialchars($row['hinhanh'], ENT_QUOTES, 'UTF-8');
                        $id = htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8');
                        $tieude = htmlspecialchars($row['tieude'], ENT_QUOTES, 'UTF-8');
                        $giagoc = number_format($row['giagoc'], 2, '.', ',');
                        $giagoc_formatted = '$' . $giagoc;
                        $url = htmlspecialchars($row['linkurl'], ENT_QUOTES, 'UTF-8');
                        $link = htmlspecialchars(strtolower("detail/$url"), ENT_QUOTES, 'UTF-8');
                    ?>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="<?php echo $link; ?>">
                                        <img src="<?php echo $link_hinh; ?>" width="400" height="400" alt="<?php echo $tieude; ?>" />
                                        <img src="<?php echo $link_hinh; ?>" width="400" height="400" alt="<?php echo $tieude; ?>" />
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="home" class="product-category">faugetglass</a>
                                        </div>
                                        <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <p class="p-product-title product-title"> <a href="<?php echo $link; ?>"><?php echo $tieude; ?></a> </p>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="product-price"><?php echo $giagoc_formatted; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    $stmt->close();
                    ?>
                </div>

                <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label>Show:</label>

                        <div class="select-custom">
                            <select name="count" class="form-control">
                                <option value="25">25</option>
                                <option value="30">30</option>
                                <option value="35">35</option>
                            </select>
                        </div>
                    </div>
                    <div class="bgphantranga">
                        <?php
                        echo "<div align='left' class='phantrang' style='float: left;width: 100%;text-align: right;'> &nbsp;&nbsp;&nbsp;&nbsp;Page: ";
                        $pagelist = $p->pageList($_GET['page'], $pages);
                        echo $pagelist;
                        echo "</div>"
                        ?>
                    </div>
                </nav>
            </div>
        </main>
    </div>
</body>