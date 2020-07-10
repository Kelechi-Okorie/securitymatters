<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link 
 *
 * @package Security Matters
 * @subpackage Security_Matters
 * @since Security Matters 1.0
 */

?>
<footer id="site-footer" role="contentinfo" class="header-footer-group">
    <div class="section-inner">
        <div class="footer-credits">
        <p class="footer-copyright">&copy;
            <?php
            echo date_i18n(
                /* translators: Copyright date format, see https://www.php.net/date */
                _x( 'Y', 'copyright date format', 'securitymatters' )
            );
            ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?>&period;</a>
            All rights reserved.

        </p><!-- .footer-copyright -->

        </div> <!-- .footer-credits -->
        <?php
            // wp_nav_menu($arg = array(
            //     'menu_class' => 'footer-navigation',
            //     'theme_location' => 'footer'
            // ));
        ?>            
    </div> <!-- .section-inner -->
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>