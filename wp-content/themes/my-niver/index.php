<?php get_header(); 

$pageID = get_option( 'page_for_posts' );
$posts = new WP_Query([
    'post_type' => 'post', 
    'posts_per_page' => 6, 
    'paged' => ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1,
    'author' => get_query_var( 'author' ),
    'cat' => get_query_var( 'cat' ),
    's' => get_query_var( 's' ),
]);

?>

    <section class="blog-header">
        <div class="container">
            <?php get_template_part('inc/menu-blog'); ?>
            <div class="blog-title">
                <h1 class="title"><?php echo get_the_title($pageID); ?></h1>
                <p><?php the_field('subtitle', $pageID); ?></p>
            </div>
        </div>
    </section>

    <section class="blog-posts">
        <div class="container">
            <?php while($posts->have_posts()): $posts->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="card-post">
                <?php the_post_thumbnail('full'); ?>
                <div class="info">
                    <?php the_title( '<h2>', '</h2>' ); ?>
                    <?php the_excerpt(); ?>
                </div>
            </a>
            <?php endwhile; ?>
        </div>
        <div class="pagination">
        <?php
            $big = 999999999;        
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $posts->max_num_pages,
                'prev_text' => '<i class="fa fa-angle-left"></i>',
                'next_text' => '<i class="fa fa-angle-right"></i>',
            ) );
        ?>
        </div>
    </section>

<?php get_footer(); ?>