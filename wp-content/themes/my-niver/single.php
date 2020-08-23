<?php get_header();  the_post(); ?>

    <section class="blog-header">
        <div class="container">
            <?php get_template_part('inc/menu-blog'); ?>
            <div class="blog-title">
                <h1 class="title"><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="post-details">
        <?php the_content(); ?>
        <div class="share-box">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>" class="share"><span class="fa fa-facebook"></span></a>
            <a href="https://twitter.com/home?status=<?php echo get_the_permalink();?>" class="share"><span class="fa fa-twitter"></span></a>
            <a href="https://api.whatsapp.com/send?text=<?php echo get_the_permalink();?>" data-action="share/whatsapp/share" target="_blank"><span class="fa fa-whatsapp"></span></a>
        </div>
    </section>

    

<?php get_footer(); ?>