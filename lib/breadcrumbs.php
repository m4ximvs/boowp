<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function boowp_breadcrumbs($post) {
    if (!is_home()) {
        echo '<div>';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        echo get_bloginfo('name');
        echo "</a> » ";

        if (is_category() || is_single()) {
            the_category('title_li=');
        } elseif (is_search()) {
            echo "Termes recherchés : " . get_search_query();
        } elseif (is_page()) {
            if ($post->post_parent) {
                echo get_the_title($post->post_parent)." » ".get_the_title();
            } else {
                echo get_the_title();
                
            }
        } elseif (is_404()) {
            echo "Erreur 404";
        }
        echo '</div>';
    }
}

?>
