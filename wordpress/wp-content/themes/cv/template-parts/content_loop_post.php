<?php
foreach ($posts as $post) {
    setup_postdata($post);
    ?>
    <p><a href= <?php the_permalink(); ?>><?php the_title(); ?></a></p>
    <p><?php echo edit_post_link('Editer');?> </p>
    <p>Texte:<?php the_content(); ?></p>
    <?php    
    if (has_tag('informatique')) {
        ?>
        <p class="tag"><?php the_tags() ?></p>
        <?php
    } else{
        ?>
        <p><?php the_tags() ?></p>

        <?php  } ?>
        <?php } ?>
