<?php get_header(); ?>
<main id="main-content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile;
    else : ?>
        <p>No content found.</p>
    <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
