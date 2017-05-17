<?php
foreach ($posts as $post) {

    setup_postdata($post);
    ?>
    <h3><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php edit_post_link('Editer');?> </p>
    <p><?php the_meta() ?></p>
    <p><?php the_content(); ?></p>

    <?php } ?>
