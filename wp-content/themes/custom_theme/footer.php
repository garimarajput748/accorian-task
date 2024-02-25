<?php
$upload_dir_baseurl = wp_upload_dir();
$upload_dir_image_path = $upload_dir_baseurl['url'] . "/";
$site_assets_path = get_stylesheet_directory_uri() . "/"; // . "/assets/css/";
$site_js_path = get_stylesheet_directory_uri() . "/"; /// . "/assets/js/";
?>
<footer class="footer-wrap style2 bg-f footer-bg-1">
    <div class="overlay op-95 bg-vulcan "></div>
    <div class="footer-top pt-75 pb-20">
        <div class="container">
            <div class="row">
                <div class="footer-widget-wrap">
                    <div class="footer-widget">
                        <a href="<?php echo home_url(); ?>" class="footer-logo">
                            <img src="<?php echo $site_assets_path; ?>assets/img/footer-logo.png" alt="Image" class="rounded">
                        </a>
                        <div class="social-box">
                            <h4 class="footer-widget-title">Follow Us</h4>
                            <ul class="social-profile style1 list-style">
                                <li>
                                    <a target="_blank" href="#">
                                        <i class="flaticon-facebook-app-symbol"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class="flaticon-instagram-2"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class="flaticon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-menu list-style">
                            <li><a href="<?php echo home_url(); ?>"><i class="flaticon-next"></i> Home</a></li>
                            <li><a href="<?php echo home_url('/webinar'); ?>"><i class="flaticon-next"></i> Webinar</a></li>
                            <li><a href="<?php echo home_url('/services'); ?>"><i class="flaticon-next"></i> Services</a></li>
                            <li><a href="<?php echo home_url('/contact-us'); ?>"><i class="flaticon-next"></i> Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Services</h4>
                        <ul class="footer-menu list-style">
                            <li><i class="flaticon-next"></i> PENETRATION TESTING</li>
                            <li><i class="flaticon-next"></i> SECURITY COMPLIANCE & ASSESSMENT SERVICES</li>
                            <li><i class="flaticon-next"></i>
                            RED TEAM ASSESSMENTS</a>
                            </li>
                            <li><i class="flaticon-next"></i> TECHNOLOGY STAFFING</a></li>
                            <li><i class="flaticon-next"></i> CONSULTING & ASSESSMENT SERVICES</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Get In Touch</h4>
                        <div class="contact-item">
                            <i class="flaticon-pin"></i>
                            <h6>Accorian Head Office</h6>
                            <p>6,Alvin Ct, East Brunswick, NJ 08816 USA</p>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-pin"></i>
                            <h6>Accorian Canada</h6>
                            <p>Toronto</p>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-pin"></i>
                            <h6>Accorian India</h6>
                            <p>401,402, Prestige Towers, Residency Rd., Shanthala Nagar, Ashok Nagar, Bengaluru, Karnataka 560025, India</p>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-call-1"></i>
                            <h6>Email</h6>
                            <a href="mailto:info@accorian.com">
                                <span>Info@accorian.com</span>
                            </a>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-email"></i>
                            <h6>Phone</h6>
                            <a href="tel:+1-732-443-3468">+1-732-443-3468</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="copyright">
            <p>
                <span class="las la-copyright"></span>2024 <strong>Accorian</strong>. All Rights Reserved By
            </p>
        </div>
    </div>
</footer>
</div>
<a href="#" class="back-to-top"><i class="flaticon-next"></i>
</a>
<script>
    const SITE_ASSESTS_PATH = '<?php echo $site_assets_path; ?>';
</script>
<script src="<?php echo $site_assets_path; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo $site_assets_path; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $site_assets_path; ?>assets/js/form-validator.min.js"></script>
<script src="<?php echo $site_assets_path; ?>assets/js/contact-form-script.js"></script>
<script src="<?php echo $site_assets_path; ?>assets/js/registration-form-script.js"></script>
<script src="<?php echo $site_assets_path; ?>assets/js/aos.min.js"></script>
<script src="<?php echo $site_assets_path; ?>assets/js/swiper-min.js"></script>
<script src="<?php echo $site_assets_path; ?>assets/js/magnific-popup.min.js"></script>
<script src="<?php echo $site_assets_path; ?>assets/js/fancybox.min.js"></script>
<script src="<?php echo $site_assets_path; ?>assets/js/progressbar.min.js"></script>
<script src="<?php echo $site_assets_path; ?>assets/js/main.js"></script>
<?php
    if(is_page("Webinar"))
      echo '<script src="'.$site_assets_path.'assets/js/countdown.js"></script>';
?>
</body>
</html>