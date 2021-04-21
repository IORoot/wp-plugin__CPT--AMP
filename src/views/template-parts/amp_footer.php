    
        <?php do_action('page_builder_footer_code'); ?>

        <?php
            
            if (have_rows('svg_instances')) {
                echo '<div class="svgs">';
                while (have_rows('svg_instances')){
                    the_row();
                    $svg = get_sub_field('svg');
                    echo $svg;
                } 
                echo '</div>';
            }

        ?>
    </body>
</html>