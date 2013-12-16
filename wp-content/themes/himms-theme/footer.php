<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<div class="horizontal-line-left"><div></div></div>
<footer>
    <div class="wrap">
        <div class="footer-logo">
            <a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/img/main-logo.png"/></a>
        </div>
        <div class="footer-menu">                                              
            <?php wp_nav_menu('menu=main-top-menu'); ?>
        </div>
        <div class="footer-links-menu cf">
                <?php wp_nav_menu('menu=footer-links-menu'); ?>
        </div>
        <div class="copyr">
            <p><span>&COPY; HIMSS 2013</span><a href="">Privacy Policy and Terms of Use</a></p>
        </div>
    </div>
</footer>
</div> <!--! end of #container -->

<!-- Javascript at the bottom for fast page loading -->
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "html5-boilerplate/js/plugins.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "html5-boilerplate/js/main.js") ?>

<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
     change the UA-XXXXX-X to be your site's ID -->
<!-- WordPress.com does not allow Google Analytics code to be built into themes they host. 
     Add this section from HTML Boilerplate manually (html5-boilerplate/index.html), or use a Google Analytics WordPress Plugin-->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
    (function(d, t) {
        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
        g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
</script>

<?php wp_footer(); ?>

</body>
</html>
