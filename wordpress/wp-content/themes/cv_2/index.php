<?php
get_header();
?>
<body>
    <div class="row">
        <div class="col-md-12">
            <?php
            $args = array('category_name' => "loisirs" );
            $posts = get_posts($args);
            ?>
            <h2 id="loisirs">loisirs</h2>
            <?php
            get_template_part( 'template-parts/content_loop_post');

            ?>

            <h2 id="competence">competence</h2>
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
            <h2 id="formation">Formation</h2>
            <?php
            get_template_part( 'template-parts/content_loop_post');
            ?>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
<?php
get_footer();

?>
</body>
