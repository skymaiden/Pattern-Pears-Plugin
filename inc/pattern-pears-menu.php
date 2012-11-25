<nav id="nav" class="group">
    <a href="#" id="nav-toggle">hide</a>

    <?php
    $terms = get_terms( 'pattern_category' );
    
    foreach ( $terms as $term ) {
        $myquery = new WP_Query ( array ( 
            'taxonomy' => 'pattern_category', 
            'term' => $term->slug 
        ) );
        $article_count = $myquery->post_count;
    
        echo "<h2 class=\"term-heading\" id=\"".$term->slug."\">";
        echo '<a href="'.get_term_link($term->slug, 'pattern_category').'">' . $term->name . '</a>';
        echo "</h2>";
    
        if ($article_count) {
            echo "<ul>";
            while ($myquery->have_posts()) : $myquery->the_post();
                echo "<li><a href=\"".get_permalink()."\">".$post->post_title."</a></li>";
            endwhile;
            echo "</ul>";
        }
    }
    ?>

</nav>
