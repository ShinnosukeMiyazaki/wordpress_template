<?php get_header(); ?>
<article>
    <div class=“content”>
        <?php if (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endif; ?>
    </div>
</article>
<?php get_footer(); ?>