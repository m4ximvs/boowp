<form role="search" method="get" class="form-inline" action="<?php echo home_url('/'); ?>">
    <label class="hide"><?php _e('Search for:', 'roots'); ?></label>
    <div class="input-group"> 
        <input type="text" value="<?php if (is_search()) { echo get_search_query();} ?>" name="s" class="form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
        <span class="input-group-addon"><button type="submit"><?php _e('Search', 'roots'); ?></button></span>
    </div>
</form>
