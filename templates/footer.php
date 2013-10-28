<footer class="content-info" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <?php dynamic_sidebar('sidebar-footer-col-1'); ?>
            </div>
            
            <div class="col-md-3 col-xs-6">
                <?php dynamic_sidebar('sidebar-footer-col-2'); ?>
            </div>
            
            <div class="col-md-3 col-xs-6">
                <?php dynamic_sidebar('sidebar-footer-col-3'); ?>
            </div>
            
            <div class="col-md-3 col-xs-6">
                <?php dynamic_sidebar('sidebar-footer-col-4'); ?>
            </div>  
        </div>
    </div>
    
    <nav id="boowp-footer-nav">
        <div class="container">
            <?php
            if (has_nav_menu('footer-navigation')) :
                wp_nav_menu(array('theme_location' => 'footer-navigation', 'menu_class' => 'navbar-nav nav'));
            endif;
            ?>
            <p class="pull-right">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        </div>
    </nav>
</footer>

<?php wp_footer(); ?>