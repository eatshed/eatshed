<footer class="footer">
    <div class="container footer__container">
        <div class="columns">
            <nav class="footer__nav column is-3">
                <?php wp_nav_menu( array('theme_location' => 'footer') ); ?>
            </nav>
            <div class="footer__logo column is-4 is-offset-1">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo-large.svg" alt="Shed Logo" />
            </div>
            <div class="footer__social column is-2 is-offset-2">
                <a href="<?php the_field('youtube', 'option'); ?>" class="footer__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-youtube.svg" alt="Youtube" /></a>
                <a href="<?php the_field('instagram', 'option'); ?>" class="footer__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-insta.svg" alt="Instagram" /></a>
                <a href="<?php the_field('facebook', 'option'); ?>" class="footer__social-links"><img src="<?php echo get_template_directory_uri() ?>/images/icon-facebook.svg" alt="Facebook" /></a>
            </div>
        </div>
    </div>
</footer><!-- /page-footer -->

<?php wp_footer(); ?>

</body>
</html>