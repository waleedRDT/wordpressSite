<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dwelio
 */

//  get_template_part( 'template-parts/content', 'banner_cta' );
?>

    <footer class="footer">
        <div class="container">
            <div class="inner">
                <div class="footer__top row py-4 align-items-center">
                    <div class="col-md-12">
                        <?php the_custom_logo(); ?>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="footer__social--links">
                            <a href="" class="fa-brands fa-facebook"></a>
                            <a href="" class="fa-brands fa-instagram"></a>
                            <a href="" class="fa-brands fa-twitter"></a>
                            <a href="" class="fa-brands fa-youtube"></a>
                            <a href="" class="fa-brands fa-linkedin"></a>
                        </div>
                    </div> -->
                </div>
                <div class="footer__bottom text-center py-4">
                    <p class="copyright__text mb-0">Copyright &copy; 2023 dwelio. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</div>  <!-- Site div closing tag  -->
<?php wp_footer(); ?>

</body>
</html>
