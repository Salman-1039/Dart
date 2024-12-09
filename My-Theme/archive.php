<?php get_header(); ?>
<main id="main-content">
    <h1>
        <?php
        if (is_category()) {
            single_cat_title();
        } elseif (is_tag()) {
            single_tag_title();
        } elseif (is_author()) {
            echo 'Author Archives: ' . get_the_author();
        } elseif (is_year()) {
            echo 'Yearly Archives: ' . get_the_date('Y');
        } elseif (is_month()) {
            echo 'Monthly Archives: ' . get_the_date('F Y');
        } elseif (is_day()) {
            echo 'Daily Archives: ' . get_the_date('F j, Y');
        } else {
            echo 'Archives';
        }
        ?>
    </h1>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile;
        the_posts_pagination();
    else : ?>
        <p>No content found.</p>
    <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
