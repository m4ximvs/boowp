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
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>