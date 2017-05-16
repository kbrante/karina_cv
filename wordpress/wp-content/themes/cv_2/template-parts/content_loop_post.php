<?php
foreach ($posts as $post) {
    setup_postdata($post);
    ?>
    <h3><a href= <?php the_permalink(); ?>><?php the_title(); ?></a></h3>
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
