<?php
/**
 * Theme wrapper customization for ajax support
 * Send all request having GET Param: mode=ajax through the theme wrapper base-ajax.php instead of base.php 
 */

add_filter('roots_wrap_base', 'roots_wrap_base_ajax'); // Add our function to the roots_wrap_base filter

  function roots_wrap_base_ajax($templates) {
    if(isset($_GET['mode'])){
        $mode = $_GET['mode'];
        
        if ($mode == 'ajax') {
            array_unshift($templates, 'base-ajax.php'); // Shift the template to the front of the array
        }
    }

    return $templates; // Return our modified array with base-ajax.php at the front of the queue
  }
