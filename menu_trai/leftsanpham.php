<div class="sidebar-wrapper" data-sticky-sidebar-options='{"offsetTop": 72}'>
    <div class="category-widget">
        <div class="widget">
            <p class="widget-title">
                <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
            </p>
            <div class="collapse show" id="widget-body-2">
                <div class="widget-body">
                    <ul class="cat-list">
                        <?php
                        require('db.php');

                        // Use prepared statements for better security
                        $stmt = $link->prepare("SELECT id, thuocloai, name_url FROM loai_ma_sanpham ORDER BY id ASC LIMIT 10");
                        $stmt->execute();
                        $result = $stmt->get_result();

                        // Fetch data and display the category list
                        while ($row = $result->fetch_assoc()) {
                            $categoryUrl = strtolower($row['name_url']);
                            $categoryName = $row['thuocloai'];
                        ?>
                            <li>
                                <a href="category/<?php echo $categoryUrl; ?>"><?php echo $categoryName; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="widget widget-price">
            <p class="widget-title">
                <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Filter by Price</a>
            </p>
            <div class="collapse show" id="widget-body-3">
                <div class="widget-body">
                    <form action="#">
                        <div class="price-slider-wrapper">
                            <div id="price-slider"></div>
                        </div>
                        <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap pb-0">
                            <div class="filter-price-text">
                                Price:
                                <span id="filter-price-range" class="mr-3"></span>
                            </div>
                            <button type="submit" class="btn btn-primary font2">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="widget widget-favorites">
            <p class="widget-title">
                <a data-toggle="collapse" href="#widget-body-7" role="button" aria-expanded="true" aria-controls="widget-body-7">Favorites</a>
            </p>
            <div class="collapse show" id="widget-body-7">
                <div class="widget-body pb-0">
                    <ul class="cat-list">
                        <li><a href="#">Top Picks</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="widget widget-color">
            <p class="widget-title">
                <a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true" aria-controls="widget-body-6">Color</a>
            </p>
            <div class="collapse show" id="widget-body-6">
                <div class="widget-body">
                    <ul class="config-swatch-list flex-column">
                        <li>
                            <a href="#" style="background-color: #c0c0c0;"></a>
                            <span>Silver</span>
                        </li>
                        <li>
                            <a href="#" style="background-color: #333;"></a>
                            <span>Black</span>
                        </li>
                        <li>
                            <a href="#" style="background-color: #f0f0f0;"></a>
                            <span>White</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="widget widget-size">
            <p class="widget-title">
                <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Sizes</a>
            </p>
            <div class="collapse show" id="widget-body-5">
                <div class="widget-body">
                    <ul class="cat-list">
                        <li><a href="#">Adjustable</a></li>
                        <li><a href="#">Small</a></li>
                        <li><a href="#">Medium</a></li>
                        <li><a href="#">Large</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="widget widget-featured">
            <p class="widget-title">
                <a data-toggle="collapse" href="#widget-body-8" role="button" aria-expanded="true" aria-controls="widget-body-8">Featured Jewelry</a>
            </p>
            <div class="widget-body">
                <?php
                require('db.php');
                // Use a prepared statement to avoid repetition and enhance security
                $stmt = $link->prepare("SELECT * FROM (SELECT * FROM ma_sanpham ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 3");
                $stmt->execute();
                $result = $stmt->get_result();

                // Fetch data efficiently
                while ($row = $result->fetch_assoc()) {
                    $imagePath = "HinhCTSP/HinhSanPham/" . $row['hinhanh'];
                    $productLink = str_replace("?", "", strtolower("detail/" . $row['linkurl']));
                    $formattedPrice = '$' . number_format($row['giagoc'], 2, '.', ',');
                ?>
                    <div class="featured-col">
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="<?php echo $productLink; ?>">
                                    <img src="<?php echo $imagePath; ?>" width="75" height="75" alt="<?php echo $row['tieude']; ?>" />
                                </a>
                            </figure>
                            <div class="product-details">
                                <p class="product-title" style="color : #000">
                                    <a href="<?php echo $productLink; ?>"><?php echo $row['tieude']; ?></a>
                                </p>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <span class="product-price"><?php echo $formattedPrice; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>