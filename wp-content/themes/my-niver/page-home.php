<?php get_header(); ?>

    <section class="hero">
        <div class="container">
            <?php get_template_part('inc/menu'); ?>
            <div class="content">
                <h1><?php the_field('banner_title'); ?></h1>
                <p><?php the_field('banner_subtitle'); ?></p>
                <a href="https://app.myniver.net/cadastro" class="button">Cadastre-se</a>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero.svg" alt="Hero">
        <a href="#beneficios" class="anchor smooth">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/angle-down.svg" alt="Anchor">
        </a>
    </section>

    <section class="benefits" id="beneficios">
        <div class="container">
            <h2 class="title left"><?php the_field('benefits_title'); ?></h2>
            <div class="grid">
                <?php while(have_rows('section_benefits')): the_row(); ?>
                <div class="card-benefit">
                    <figure>
                        <img src="<?php the_sub_field('icon'); ?>" alt="Icon">
                    </figure>
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('description'); ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ballons.svg" alt="ballons" class="decorator">
    </section>

    <section class="partners">
        <div class="grid">
            <div class="container">
                <h2 class="title"><?php the_field('partners_title'); ?></h2>
                <p><?php the_field('partners_subtitle'); ?></p>
            </div>
            <div class="carousel-partners">
                <div class="carousel owl-carousel" id="carousel-partners">
                <?php while(have_rows(('partners'))): the_row(); ?>
                    <div class="card-partner">
                        <figure>
                            <img src="<?php the_sub_field('logo'); ?>" alt="<?php the_sub_field('name'); ?>">
                        </figure>
                        <h3><?php the_sub_field('name'); ?></h3>
                    </div>
                <?php endwhile; ?>
                </div>
                <button class="carousel-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="Arrow">
                </button>
                <button class="carousel-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="Arrow">
                </button>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners-decorator.svg" alt="decorator" class="decorator">
    </section>

    <section class="home-video">
        <div class="container">
            <h2 class="title"><?php the_field('video_title'); ?></h2>
            <p><?php the_field('video_subtitle'); ?></p>
        </div>
        <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/4yFldhV8rCI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video-decorator.svg" alt="decorator" class="decorator">
    </section>

    <section class="about" id="quem-somos">
        <div class="container">
            <h2 class="title white left">Quem somos</h2>
            <div class="text">
                <?php the_field('about_description'); ?>
            </div>
        </div>
    </section>

    <section class="clients">
        <div class="container">
            <div class="counter">
                <h3>10.273</h3>
                <p>aniversariantes<br>cadastrados</p>
            </div>
            <div class="cta">
                <h2 class="title white left border-green">Comemore conosco você também</h2>
                <a href="https://app.myniver.net/cadastro" class="button">Cadastre-se</a>
            </div>
        </div>
    </section>

    <section class="who-celebrated">
        <div class="container">
            <h2 class="title"><?php the_field('testimonies_title'); ?></h2>
            <p><?php the_field('testmonies_subtitle'); ?></p>
        </div>
        <div class="carousel-testmonies">
            <div class="carousel owl-carousel">
                <?php while(have_rows('testmonies')): the_row(); ?>
                <div class="card-testimony">
                    <figure>
                        <img src="<?php the_sub_field('image'); ?>" alt="Client">
                    </figure>
                    <div class="info">
                        <h3><?php the_sub_field('name'); ?></h3>
                        <?php the_sub_field('testmony'); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <button class="carousel-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="Arrow">
            </button>
            <button class="carousel-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="Arrow">
            </button>
        </div>        
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testmonies-decorator.svg" alt="ballons" class="decorator">
    </section>

<?php get_footer(); ?>