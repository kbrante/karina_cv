<?php
    /* Template Name: cv */

 ?>
<?php
    $args = array('category_name' => "loisirs" );
    $posts = get_posts($args);
    ?>
    <h2>loisirs</h2>
    <?php
       foreach ($posts as $post) {
        setup_postdata($post);
         ?>

         <p><a href= <?php the_permalink(); ?>><?php the_title(); ?></a></p>
         <p><?php the_content(); ?></p>
         <?php } ?>
    <h2>competence</h2>
    <?php
    $args = array('category_name' => "competence" );
    $posts = get_posts($args);
        foreach ($posts as $post) {
         setup_postdata($post);
          ?>

          <p><a href= <?php the_permalink(); ?>><?php the_title(); ?></a></p>
          <p><?php the_content(); ?></p>

<?php } ?>
<?php
    $args = array('category_name' => "formation" );
    $posts = get_posts($args);
    ?>
    <h2>Formation</h2>
    <?php
       foreach ($posts as $post) {
        setup_postdata($post);
         ?>

         <p><a href= <?php the_permalink(); ?>><?php the_title(); ?></a></p>
         <p><?php the_content(); ?></p>
         <?php } 
