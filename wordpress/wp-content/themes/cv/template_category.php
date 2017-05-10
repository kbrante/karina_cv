<?php
    /* Template Name: category */
    get_header()
 ?>
 <?php
     $args = array('category_name' => "loisirs" );
     $posts = get_posts($args);
     ?>
     <h2>loisirs</h2>
     <?php
         get_template_part( 'template-parts/content_loop_post');

      ?>
