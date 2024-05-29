<!-- footer -->
<div class="l-footer__contact">
    <div class="l-footer__contactInner">
        <div class="l-footer__contactBlock">
            <a href="<?php echo esc_url(home_url('contact')); ?>" class="l-footer__contactLink -contact">
                <h2 class="l-footer__contactTitle">Contact<span>お問い合わせ</span></h2>
                <div class="l-footer__contactBg"></div>
            </a>
        </div>
        <div class="l-footer__contactBlock">
            <a href="<?php echo esc_url(home_url('recruit')); ?>" class="l-footer__contactLink -recruit">
                <h2 class="l-footer__contactTitle">Recruit<span>採用情報</span></h2>
                <div class="l-footer__contactBg"></div>
            </a>
        </div>
    </div>
</div>
<footer class="l-footer">
    <div class="l-container">
        <div class="l-footer__detail">
            <nav class="l-footer__nav">
                <ul class="l-footer__navList">
                    <li class="l-footer__navItem">
                        <a href="<?php echo esc_url(home_url('company')); ?>" class="l-footer__navLink">COMPANY</a>
                    </li>
                    <li class="l-footer__navItem">
                        <a href="<?php echo esc_url(home_url('service')); ?>" class="l-footer__navLink">SERVICE</a>
                    </li>
                    <li class="l-footer__navItem">
                        <a href="<?php echo esc_url(home_url('works')); ?>" class="l-footer__navLink">WORKS</a>
                    </li>
                    <li class="l-footer__navItem">
                        <a href="<?php echo esc_url(home_url('news')); ?>" class="l-footer__navLink">NEWS</a>
                    </li>
                    <li class="l-footer__navItem">
                        <a href="<?php echo esc_url(home_url('contact')); ?>" class="l-footer__navLink">CONTACT</a>
                    </li>
                    <li class="l-footer__navItem">
                        <a href="<?php echo esc_url(home_url('recruit')); ?>" class="l-footer__navLink">RECRUIT</a>
                    </li>
                </ul>
            </nav>
            <div class="l-footer__company">
                <a href="<?php echo esc_url(home_url('')); ?>" class="l-header__logoLink">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer_logo.svg"
                        alt="藤原建設工業株式会社" />
                </a>
                <div class="l-footer__access">
                    <p class="l-footer__accessTitle">Access</p>
                    <address>
                        藤原建設工業株式会社 本社<br>
                        〒000-0000 千葉県◯◯市◯◯丁目◯◯番<br>
                        <a href="tel:00-0000-0000">TEL 00-0000-0000</a>
                    </address>
                </div>
            </div>
        </div>
        <div class="l-footer__pageTop">
            <a href="#top">
                <div class="circle">
                    <span class="arrow"></span>
                </div>
            </a>
        </div>
        <div class="l-footer__policy">
            <a href="<?php echo esc_url(home_url('privacy')); ?>" class="l-footer__policy__link">Privacy Policy</a>
            <p class="l-footer__policyText">© 1995 Fujiwara Construction Industry. Co., Ltd.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- /footer -->
</body>

</html>