<?php
// Template Name: Home
?>
<?php 
    $args = array(
    'page' => 'home',
    'class' => ''
    ); 
?>

<?php get_template_part('header', null, $args); ?>
<?php
    $data = get_field('sessao_1');
?>
 <section id="banner-top">
    <div class="splide splide-banners-top">
        <div class="splide__track">
            <div class="splide__list">
                <div class="splide__slide">
                    <div class="banner-1 banners">
                        <?php
                            $object = $data['banner_1_topo'];
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-12 col-text">
                                   <h2 class="title">
                                       <?= $object['titulo']; ?>
                                   </h2>
                                   <?= $object['texto']; ?>
                                   <?php get_template_part('includes/components/buttons/solicite-um-orcamento', null, null); ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="splide__slide">
                    <div class="banner-2 banners">
                        <?php
                            $object = $data['banner_2_topo'];
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-12 col-text">
                                   <h2 class="title">
                                       <?= $object['titulo']; ?>
                                   </h2>
                                   <?= $object['texto']; ?>
                                   <?php get_template_part('includes/components/buttons/solicite-um-orcamento', null, null); ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="splide__slide">
                    <div class="banner-3 banners">
                        <?php
                            $object = $data['banner_3_topo'];
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-12 col-text">
                                   <h2 class="title">
                                       <?= $object['titulo']; ?>
                                   </h2>
                                   <?= $object['texto']; ?>
                                   <?php get_template_part('includes/components/buttons/solicite-um-orcamento', null, null); ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="splide__slide">
                    <div class="banner-4 banners">
                        <?php
                            $object = $data['banner_4_topo'];
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-12 col-text">
                                   <h2 class="title">
                                       <?= $object['titulo']; ?>
                                   </h2>
                                   <?= $object['texto']; ?>
                                   <?php get_template_part('includes/components/buttons/solicite-um-orcamento', null, null); ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $object = $data['cards'];
?>                
<div class="container container-cards-top">
    <div class="row splide  splide-cards-top">
        <div class="col-12 splide__track">
            <div class="boxes-intro-top splide__list">
                <?php foreach($object as $object): ?>
                    <div class="splide__slide">
                        <div class="box">
                            <img src="<?= $object['icone']; ?>" alt="<?= strip_tags($object['titulo']); ?>" title="<?= strip_tags($object['titulo']); ?>" >
                            <h2 class="title"><?= $object['titulo']; ?></h2>
                            <p>
                                <?= $object['texto']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php $data = get_field('sessao_2'); ?>
<section id="sobre">
    <div class="container">
        <div class="row line-centered">
            <div class="col-lg-7 col-12 col-img d-none d-lg-block">
                <img src="<?= $data['imagem']['url']; ?>" class="img-dest" title="<?= $data['imagem']['title']; ?>" alt="<?= $data['imagem']['alt']; ?>">
                <img src="<?= $data['logo_1']; ?>" alt="selo" title="selo" class="selo">
                <img src="<?= $data['logo_2']; ?>" alt="selo" title="selo" class="selo-2">
            </div>
            <div class="col-lg-5 col-12 col-text">
                <h1 class="title-large">
                    <?= $data['titulo']; ?>
                </h1>
                <div class="box-selos d-lg-none">
                    <img src="<?= $data['logo_1']; ?>" alt="selo" title="selo" class="selo">
                    <img src="<?= $data['logo_2']; ?>" alt="selo" title="selo" class="selo-2">
                </div>
                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/sobre.jpg" class="img-dest d-lg-none" title="Quem Somos" alt="Quem Somos">
                <?= $data['texto']; ?>
                <a href="<?= get_home_url(); ?>/nossa-historia/" title="Conheça nossa história" class="link">
                    <i class="fa fa-arrow-right"></i>
                    Conheça nossa história
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('includes/sections-globals/politica-de-qualidade', null, null); ?>

<?php get_template_part('includes/sections-globals/download-catalogo', null, null); ?>

<?php get_template_part('includes/sections-globals/nossos-produtos', null, null); ?>

<?php get_template_part('includes/sections-globals/cartao-bndes', null, null); ?>

<?php 
    $data = get_field('sessao_7'); 
    if($data):
?>
    <section id="section-conheca-nossas-normas">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title-large">
                    <?= $data['titulo']; ?>
                    </h2>
                    <?= $data['texto']; ?>
                </div>
            </div>
            <?php 
                $featured =  $data['normas']; 
            ?>

            <div class="row line-cards">
                <?php foreach( $featured as $post ): 
                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                    <div class="col-12 col-lg-3">
                        <?php 
                            $args = array(
                                'title' => limit_words(get_the_title(), 100),
                                'text' => limit_words(get_field('texto_introdutorio_card_norma'), 200),
                                'link' => get_the_permalink()
                            );
                            get_template_part('includes/components/card-normas', null, $args); 
                        ?> 
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="<?= get_home_url(); ?>/normas-tecnicas/" class="button button-green" title="Ver Todas as Normas">
                        Ver Todas as Normas  
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
<?php wp_reset_postdata(); endif; ?>
<?php
    $data = get_field('sessao_8'); 
    if($data):
?>
    <section id="section-depoimentos">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="title-large"><?= $data['titulo']; ?></h2> 
                    <?= $data['texto']; ?>
                </div>
            </div>
            <?php  $element = $data['card']; ?>
            <div class="splide splide-depoimentos row line-cards">
                <div class="col-12 splide__track"> 
                    <div class="splide__list">
                        <?php foreach($element as $element): ?>
                            <div class="splide__slide">
                                <div class="card">
                                    <img src="<?= get_template_directory_uri(); ?>/dist/imgs/icons/google.svg" class="logo-google" alt="Logo Google" title="Logo Google" >
                                    <span class="title"><?= $element['titulo']; ?></span>
                                    <?= $element['texto']; ?>
                                    <div class="stars"> 
                                        <?php 
                                            $cont = 1;
                                            while($cont <= $element['quantidade_estrela']): 
                                            $cont++;
                                        ?>
                                            <i class="fa fa-star"></i>
                                        <?php endwhile; ?>
                                    </div>
                                    <span class="name">
                                        <?= $element['nome']; ?>
                                    </span>
                                    <span class="local">
                                        <?= $element['local']; ?>
                                    </span>
                                </div> 
                            </div> 
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- 
<?php 

    $query = new WP_Query(array(
        'posts_per_page'=> 4,
        'post_type'        => 'post',
        'post_status' => 'publish',
        'paged' => $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
    )); 
  
    if( $query->have_posts() ) :
        $data = get_field('sessao_9'); 

?>    
<section id="section-list-blog">
    <div class="container">
        <div class="row line-intro">
            <div class="col-12 text-center">
                <h2 class="title-large">
                    <?= $data['titulo']; ?>
                </h2>
                <?= $data['texto']; ?>
            </div>
        </div>
        <div class="row line-cards">
            <?php while( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-12 col-lg-6">
                    <a href="<?= get_permalink() ?>" title="<?php echo strip_tags((limit_words(get_the_title(),55))); ?>">
                        <div class="box-card">
                            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);?>" title="<?= get_the_title(get_post_thumbnail_id()); ?>">
                            <div class="content">
                                <h3 class="title">
                                    <?php echo(limit_words(get_the_title(),55)); ?>
                                </h3>
                                <span class="date">
                                    <i class="fa fa-calendar"></i>
                                    <?= get_the_date() ?>
                                </span>
                                <p>
                                    <?php echo(limit_words(get_the_excerpt(),200)); ?>
                                </p>
                                <span class="link">
                                    Continuar Lendo
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="row">
            <div class="col-12"> 
                <a href="<?= get_home_url(); ?>/blog/" title="Acesso ao Blog" class="button button-green">Acesso ao Blog <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>
<?php                  
    wp_reset_postdata();
    endif;
?> -->
<?php get_template_part('includes/sections-globals/section-contact', null, $args); ?>




<?php get_template_part('footer', null, null); ?> 

<script>
    var splideGaleria = new Splide( '.splide-banners-top', {
        perPage: 1,
        pagination:  true,
        arrows: false
    } ); 
    splideGaleria.mount();

    var splideDepoimentos = new Splide( '.splide-depoimentos', {
        perPage: 3,
        pagination:  true,
        arrows: true,
        breakpoints: {
            1023: {
                perPage: 1,
                pagination: false
            },
        }
    } );
    splideDepoimentos.mount();
    
    var splideCardsTop = new Splide( '.splide-cards-top', {
        perPage: 1,
        pagination:  false,
        arrows: true,
        mediaQuery: 'min',
        breakpoints: {
            1024: {
                destroy: true
            },
        }
    } );
    splideCardsTop.mount();
    
</script>


