<?php get_header(); ?>

    <section class="hero">
        <div class="container">
            <?php get_template_part('inc/menu'); ?>
            <div class="content">
                <h1><?php the_field('banner_title'); ?></h1>
                <p><?php the_field('banner_subtitle'); ?></p>
                <a href="#smooth" class="button smooth">Cadastre-se</a>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-b2b.svg" alt="Hero" class="b2b">
        <a href="#servicos" class="anchor smooth">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/angle-down.svg" alt="Anchor">
        </a>
    </section>

    <section class="services" id="servicos">
        <div class="container">
            <h2 class="title"><?php the_field('services_title'); ?></h2>
            <p><?php the_field('services_title'); ?></p>
        </div>
        <div class="grid">
            <?php 
            $count = 0;
            while(have_rows('partners_sections')): the_row(); $count ++; ?>
            <div class="card-service <?php if($count % 2 === 0) echo 'reverse';?>">
                <figure>
                    <img src="<?php the_sub_field('image'); ?>" alt="Services">
                </figure>
                <div class="info">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('description'); ?></p>
                </div>
                <?php if($count === 2): ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners-decorator.svg" alt="decorator" class="decorator-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video-decorator.svg" alt="decorator" class="decorator-2">
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="plans">
        <div class="container">
            <h2 class="title">Planos</h2>
            <p>Enquanto durar a pandemia:</p>
        </div>
        <div class="grid">
            <div class="card-plan">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plans.svg" alt="Planos">
                </figure>
                <span class="price">R$ 29,90</span>
                <span class="list sub">por mês</span>
                <span class="list">• Grátis por 30 dias</span>
                <span class="list">• Todos os serviços inclusos</span>
                <span class="taxies">Impostos adicionais podem ser cobrados</span>
                <a href="#contato" class="button smooth">Solicitar reunião</a>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testmonies-decorator.svg" alt="ballons" class="decorator">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video-decorator.svg" alt="decorator" class="decorator-2">
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
                <h2 class="title white left border-green">Seja um parceiro você também</h2>
                <a href="#contato" class="button smooth">Solicitar reunião</a>
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