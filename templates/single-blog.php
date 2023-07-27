<?php 
    $args = array(
    'page' => 'blog',
    'class' => 'header-shadow'
    ); 
?>

<?php get_template_part('header', null, $args); ?>


<?php 

global $wp_query;
$postcat = get_the_category( $wp_query->post->ID );
$postcat = $postcat[0]->term_id;

?>

<div id="single-post">
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12 ">
                    <div class="container-content">
                        <h1><?= the_title(); ?></h1>
                        <p class="date"><i class="fa fa-calendar"></i> <?= get_the_date() ?></p>
                        <?= the_content(); ?>
                    </div>
                </div>
                <?php get_template_part('includes/sidebar-blog', null, null); ?>
            </div>
        </div>
    </section>
    
    <?php get_template_part('includes/sections-globals/download-catalogo', null, null); ?>

    <section class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <?php 
                    $args = array(
                        'post_type' => 'post', // selecionando o tipo de post desejado
                        'showposts' => '2', //limitando o numero de posts a serem exibidos
                        // 'category__in' => wp_get_post_categories(get_the_ID(), array('fields' => 'ids')), //buscando por categorias do post atual
                        'tag__in' => wp_get_post_tags(get_the_ID(), array('fields' => 'ids')), //buscando por tags do post atual
                        'post__not_in' => array(get_the_ID()), // excluindo o post atual das buscas.
                        'order' => 'rand', // definindo a ordem de exibição randomica para o post
                    );

                    $query = new WP_Query($args);
                        
                    if( $query->have_posts() ) :

                ?>
                    <div class="row pt-1 relacionados d-lg-flex">
                        <div class="col-12">
                            <h2 class="title-artigos-rl">Leia mais</h2>
                        </div>
                        <?php

                            while( $query->have_posts() ) : $query->the_post();

                        ?>
                            <div class="col-lg-6 col-12">
                                <article class="card-component-one">
                                    <a href="<?= get_permalink() ?>">
                                        <div class="img">
                                        <img src="<?=get_the_post_thumbnail_url();?>"  alt="<?= get_the_title();?>" title="<?= get_the_title();?>">
                                        </div>
                                        <div class="content">
                                            <h2 class="title">
                                                <?php echo(limit_words(get_the_title(),55)); ?>
                                            </h2>
                                            <span class="date"><i class="fa fa-calendar"></i> <?= get_the_date() ?></span>
                                            <p>
                                                <?php echo(limit_words(get_the_excerpt(),138)); ?>
                                            </p>
                                            <span class="link">Continuar Lendo <i class="fa fa-arrow-right"></i></span>

                                        </div>
                                    </a>
                                </article>
                            </div>
                        <?php
                        endwhile;
                            wp_reset_postdata();
                        ?>
                    </div> 
                <?php  endif; ?>
            </div>
        </div>
    </section>

</div>

<?php get_template_part('footer', null, null); ?> 

<script>

var windowWidth = window.innerWidth;
if(windowWidth <= 1023){
    var splideRelacionados = new Splide( '.splide-relacionado', {
        perPage: 1,
        rewind : true, 
        pagination:  true,
        arrows:  false,
    } );
    splideRelacionados.mount();
}

</script>
</body>
</html>