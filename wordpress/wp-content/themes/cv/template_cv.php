<?php
    /* Template Name: cv */
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

    <h2>competence</h2>
    <?php
        $args = array('category_name' => "competence" );
        $posts = get_posts($args);

     ?>
     <?php
     get_template_part( 'template-parts/content_loop_post');

      ?>
<?php
    $args = array('category_name' => "formation" );
    $posts = get_posts($args);
    ?>
    <h2>Formation</h2>
    <?php
    get_template_part( 'template-parts/content_loop_post');
