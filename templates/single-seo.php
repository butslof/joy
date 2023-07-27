<?php 
    $args = array(
    'page' => 'seo-local',
    'class' => ''
    ); 
?>

<?php get_template_part('header', null, $args); ?>

<?php 
    $args = array(
        'title' => get_the_title()
    );
    get_template_part('includes/sections-globals/section-intro-int', null, $args); 
?>

<?php get_template_part('includes/breadcrumb', null, null); ?>

<section id="section-intro">
    <div class="container">
        <div class="row line-content">
            <div class="col-lg-6 col-12 col-text">
                <?php get_template_part('includes/components/galeria', null, null); ?>
            </div>
            <div class="col-lg-6 col-12 col-form">
                <?php get_template_part('includes/components/form-sticky', null, null); ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('includes/sections-globals/produtos-relacionados', null, null); ?>

<section id="section-content-full">
    <div class="container">
        <?php 
            $data = get_field('sessao_3'); 
            if($data):
        ?>
            <div class="row line-centered">
                <?php foreach($data['coluna_texto'] as $element): ?>
                    <div class="col-12 col-lg-6 col-text">
                        <h2 class="title-large">
                            <?= $element['titulo']; ?>
                        </h2>
                        <?= $element['texto']; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php 
    $data = get_field('sessao_4');

    if($data['iframe']){
        $args = array(
            'iframe' => $data['iframe']
        );
        get_template_part('includes/sections-globals/maps-iframe', null, $args ); 
    }
?>


<?php get_template_part('includes/sections-globals/cartao-bndes', null, null); ?>
<?php get_template_part('includes/sections-globals/politica-de-qualidade', null, null); ?>
<?php get_template_part('includes/sections-globals/download-catalogo', null, null); ?>

<?php
    $data = get_field('sessao_7'); 
    if($data['cards']):
        $title = get_field('outras_areas_de_atuacao', 'option');
?>

<section id="outras-atuacoes">
    <div class="container">
        <div class="row line-intro">
            <div class="col-12 text-center">
                <h2 class="title-large">
                    <?= $title['titulo']; ?>
                </h2>
            </div>
        </div>
        <div class="row line-content">
            <div class="col-12">
                <div class="splide  splide-outras-atuacoes">
                    <div class="splide__track">
                        <div class="splide__list">
                            <?php foreach($data['cards'] as $element):  ?>
                                <div class="splide__slide"> 
                                    <?php 
                                        $args = array(
                                            'title' => limit_words(get_the_title($element->ID), 100),
                                            'text' => limit_words(get_field('texto_introdutorio', $element->ID), 200),
                                            'text-button' => 'SAIBA MAIS +', 
                                            'image' => get_the_post_thumbnail_url($element->ID), 
                                            'alt_image' => get_post_meta( get_post_thumbnail_id($element->ID), '_wp_attachment_image_alt', true),
                                            'title_image' => get_the_title(get_post_thumbnail_id($element->ID)),
                                            'link' => get_the_permalink($element->ID)
                                        );
                                        get_template_part('includes/components/card-one', null, $args); 
                                    
                                    ?> 
                                </div>
                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var splideAtuacoes = new Splide( '.splide-outras-atuacoes', {
        perPage: 3,
        pagination:  true,
        arrows: true,
        breakpoints: {
            1023: {
                perPage: 1,
                pagination:  false
            },
        }
    } );
    splideAtuacoes.mount();
</script>
<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_template_part('includes/sections-globals/texto-apoio', null, null); ?>

<?php get_template_part('includes/sections-globals/section-contact', null, null); ?>

<?php get_template_part('footer', null, null); ?> 
