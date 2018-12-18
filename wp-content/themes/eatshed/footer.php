<footer class="footer">
    <div class="container footer__container">
        <div class="columns">
            <nav class="footer__nav column is-offset-1 is-3 is-half-mobile">
                <?php wp_nav_menu( array('theme_location' => 'footer') ); ?>
            </nav>
            <div class="footer__logo column is-4 is-half-mobile">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo-large.svg" alt="Shed Logo" />
            </div>
            <div class="footer__social column is-3">
                <a href="<?php the_field('youtube', 'option'); ?>" class="footer__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-youtube.svg" alt="Youtube" /></a>
                <a href="<?php the_field('instagram', 'option'); ?>" class="footer__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-insta.svg" alt="Instagram" /></a>
                <a href="<?php the_field('facebook', 'option'); ?>" class="footer__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-facebook.svg" alt="Facebook" /></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="columns">
            <div class="column is-8 is-offset-2 footer__copyright-container">
                <p class="has-text-white footer__copyright">© 2019 Eatshed Sheffield Ltd. All Rights Reserved</p>
                <p class="has-text-white footer__copyright">Website by <a href="https://www.stuartchaffe.co.uk/">Stu</a> & <a href="https://calumbaines.co/">Calum.</a> Brand managed by <a href="#na">GH</a></p>
            </div>
        </div>
    </div>
</footer><!-- /page-footer -->

<?php wp_footer(); ?>

</body>
</html>