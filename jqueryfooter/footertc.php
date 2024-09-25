<footer class="footer appear-animate">
    <div class="container-fluid">
        <div class="footer-top">
            <div class="widget widget-newsletter">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-9">
                        <p class="widget-title">Subscribe newsletter</p>
                        <p>Get all the latest information on Events, Sales and Offers. Sign up for newsletter today.
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-7 d-flex align-items-center">
                        <form action="#" class="d-flex w-100 pb-2">
                            <input type="email" class="form-control mb-0" placeholder="Enter Your Email address" required />
                            <button type="submit" class="btn btn-primary text-white">Subscribe</button>
                        </form>
                    </div>

                    <div class="col-lg-2 col-md-12 col-sm-5 widget-social d-flex align-items-center justify-content-lg-end justify-content-start mt-2 mb-1 mb-sm-0 mt-sm-0">
                        <div class="social-icons pb-1">
                            <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
                            <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-middle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget">
                        <p class="widget-title pb-2 mb-1">Contact Info</p>
                        <ul class="contact-info">
                            <?php
                            require('db.php');
                            $query = "SELECT * FROM tin_thicong WHERE thuocloai = 2 AND id IN (2, 3, 4)";
                            $result = mysqli_query($link, $query);
                            $contact_info = [];

                            while ($row = mysqli_fetch_assoc($result)) {
                                $contact_info[$row['id']] = htmlspecialchars($row['mota']);
                            }
                            ?>
                            <li>
                                <span class="contact-info-label">Address:</span> <?php echo $contact_info[2] ?? 'No address found'; ?>
                            </li>
                            <li>
                                <span class="contact-info-label">Phone:</span> Toll Free <a href="tel:<?php echo $contact_info[3] ?? ''; ?>"><?php echo $contact_info[3] ?? 'No phone found'; ?></a>
                            </li>
                            <li>
                                <span class="contact-info-label">Email:</span> <a href="mailto:<?php echo $contact_info[4] ?? ''; ?>"><?php echo $contact_info[4] ?? 'No email found'; ?></a>
                            </li>
                            <li>
                                <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun / 9:00 AM - 8:00 PM
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-9">
                    <div class="row footer-content">
                        <div class="col-lg-3">
                            <div class="widget">
                                <p class="widget-title">Quick Links</p>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="links mb-0">
                                            <?php
                                            require('db.php');
                                            $tv = "select * from gioi_thieu order by id asc limit 0,4";
                                            $tv_1 = mysqli_query($link, $tv);
                                            $a_tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                                $id = "$tv_2[id]";
                                                $tieude_en = "$tv_2[tieude_en]";
                                                $tieude = "$tv_2[tieude]";
                                                $mota = "$tv_2[mota]";
                                                $ngay = "$tv_2[ngay]";
                                                $url = $tv_2['linkurl'];
                                                $link = str_replace("?", "", strtolower("about/$url"));
                                            ?>
                                                <li><a href="<?php echo "$link"; ?>"><?php echo $tieude; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <p class="widget-title">Popular Tags</p>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="links mb-0">
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
                                                <li><a href="category/<?php echo $categoryUrl; ?>"><?php echo $categoryName; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <p class="widget-title">News Corners</p>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="links mb-0">
                                            <?php
                                            require('db.php');
                                            $tv = "SELECT * FROM (SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 3";
                                            $tv_1 = mysqli_query($link, $tv);
                                            ?>
                                            <?php
                                            while ($row = mysqli_fetch_array($tv_1)) {
                                                $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $mota = "$row[mota]";
                                                $ngay = "$row[ngay]";
                                                $url = $row['linkurl'];
                                                $link = str_replace("?", "", strtolower("post/$url"));
                                            ?>
                                                <h3 class="p-text-footer">
                                                    <a href="<?php echo $link; ?>">
                                                        <i class="fa fa-fire"></i> <?php echo $tieude_en; ?>
                                                    </a>
                                                </h3>
                                                <br>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div class="widget widget-time">
                                <p class="widget-title mb-1">Working Days/Hours</p>
                                <ul class="contact-info">
                                    <li>
                                        Mon - Sun / 9:00AM - 8:00PM
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="footer-bottom d-sm-flex align-items-center">
                        <div class="footer-left">
                            <span class="footer-copyright">Porto faugetglass.site © 2021 All Rights Reserved</span>
                        </div>

                        <div class="footer-right ml-auto mt-1 mt-sm-0">
                            <div class="payment-icons mr-0">
                                <span class="payment-icon visa" style="background-image: url(hinhmenu/payments/payment-visa.svg)"></span>
                                <span class="payment-icon paypal" style="background-image: url(hinhmenu/payments/payment-paypal.svg)"></span>
                                <span class="payment-icon stripe" style="background-image: url(hinhmenu/payments/payment-stripe.png)"></span>
                                <span class="payment-icon verisign" style="background-image:  url(hinhmenu/payments/payment-verisign.svg)"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>