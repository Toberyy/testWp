<?php get_header();?>


<div class="main">
    <?php 
    // Выводим контент страницы (включая блоки Gutenberg)
    while ( have_posts() ) : the_post(); 
        the_content(); 
    endwhile; 
    ?>
</div>


<?php get_footer(); ?>
