<footer>
    <div class="footer">
        <div class="col-sm-2 col-xs-6 hidden-sm hidden-xs"></div>

        <div class="col-sm-12 col-xs-12 col-md-10 col-lg-8 footer-content">
            <div class="col-md-6 left">
                <?php the_field('footer_form', 'options')?>
                <p class="copyright"><?php the_field('copyright', 'options')?></p>
            </div>
            <div class="col-md-6 right">
                <div class="footer-row">
                    <div class="footer-links">
                        <?php
                        $args = array(
                            'theme_location' => 'footer_menu'
                        );
                        wp_nav_menu($args); ?>
                    </div>
                    <div class="social">
                        <?php
                        $socials = get_field('socials', 'option') ?: [];
                        if ($socials):
                            foreach ($socials as $social): ?>
                                 <a href="<?= esc_url($social['link']); ?>">
                                      <img src="<?= esc_url($social['icon']); ?>" />
                                 </a>
                            <?php endforeach;
                        else:
                        endif;
                        ?>
                    </div>
                </div>
                 <p class="right-copy hidden-sm hidden-xs hidden-md">
                     <?php the_field('copy_right', 'options')?>
                 </p>
            </div>
        </div>

        <div class="col-sm-2 col-xs-6 hidden-sm hidden-xs"></div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>