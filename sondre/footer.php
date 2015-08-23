<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 define(THEME_URL, get_bloginfo('template_url'));
?>

</section><!-- Main -->

<section class="row">
  <footer class="large-12 columns footer" id="bottom">
        <ul role="navigation" class="footer-links">

            <li><a href="//twitter.com/sondrelindhagen" class="twitter"><i class="fa fa-twitter"></i>sondrelindhagen</a></li>
            <li><a href="//instagram.com/sondrelindhagen" class="instagram"><i class="fa fa-instagram"></i>sondrelindhagen</a></li>

            <li><div class="fb-like-box" data-href="http://www.facebook.com/lindhagen.no" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div></li>

        </ul>

        <p class="copy">Design av  <a href="//nicowesse.com">Nicolay Wesseltoft</a> © <?php echo date('Y'); ?> Sondre Lindhagen. All rights reserved.</p>

    </footer>
</section>

<script>
document.write('<script src=' +
('__proto__' in {} ? '<?php echo THEME_URL . "/assets/js/vendor/zepto"; ?>' : '<?php echo THEME_URL . "/js/vendor/jquery"; ?>') +
'.js><\/script>')
</script>

<script src="<?php echo THEME_URL . "/assets/js/foundation.min.js"; ?>"></script>
<script src="<?php echo THEME_URL . "/assets/js/vendor/jquery.js"; ?>"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!--

<script src="js/foundation/foundation.js"></script>

<script src="js/foundation/foundation.placeholder.js"></script>

<script src="js/foundation/foundation.tooltips.js"></script>

-->

<script src="<?php echo THEME_URL . "/assets/js/script.js"; ?>"></script>

<?php wp_footer(); ?>
</body>
</html>