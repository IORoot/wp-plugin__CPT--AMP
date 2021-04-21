<?php

class amp_walker extends Walker_Nav_Menu {

    // Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        
        $output .= '<li class="menu-item">';
            $output .= '<a href="'. $item->url .'">';
                $output .= $item->title;
            $output .= '</a>';
        $output .= '</li>';

    }
}

?>

<amp-sidebar id="sidebar1" layout="nodisplay" side="left" class="ampsidebar">  
    <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar">✕</div>
    <?php
    wp_nav_menu( array(
        'menu'           => 'amp-menu',   
        'menu_class'     => 'menu-AMP',
        'menu_id'        => 'menu-AMP',
        'walker'         => new amp_walker,
    ) );
    ?>
</amp-sidebar>
