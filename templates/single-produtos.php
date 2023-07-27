<?php
// Template Name: Single Produtos
?>
<?php $infos = get_field('informacoes', 'option'); ?>
<?php
$args = array(
    'page' => 'single-produtos',
    'class' => ''
);
?>

<?php get_template_part('header', null, $args); ?>



<?php get_template_part('includes/breadcrumb', null, null); ?>

<div class="container">
    <div class="row row-title">
        <div class="col-12">
            <h1 class="title-large"><?= get_the_title(); ?></h1>
        </div>
    </div>
</div>

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

<?php
$featured_posts = get_field('sessao_2');
$featured =  $featured_posts['normas'];
if ($featured) :
    $data = get_field('normas_tecnicas_atendidas', 'option');
?>
    <section id="section-normas-tecnicas">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="title-large">
                        <?= $data['titulo']; ?>
                    </h2>
                    <?= $data['texto']; ?>
                </div>
            </div>
            <div class="row line-cards">
                <?php foreach ($featured as $post) :
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
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
<div class="container">
    <div class="row row-banner-whatsapp">
        <div class="col-12">
            <a href="https://api.whatsapp.com/send?phone=55<?= formatNumber($infos['whatsapp']); ?>" target="_blank" title="Contato via WhatsApp" onclick="
                gtag('event', 'WhatsApp', {
                        'event_category': 'WhatsApp',
                        'event_action' : 'Click',
                        'event_label': 'Banner WhatsApp',
                        'value': 'WhatsApp'
                    });
            ">
                <div class="d-none d-lg-block">
                    <img src="<?= get_template_directory_uri(); ?>/dist/imgs/banner-whatsapp.png" alt="Contato via WhatsApp">

                </div>
                <div class="d-lg-none">
                    <img src="<?= get_template_directory_uri(); ?>/dist/imgs/banner-whatsapp-mob.png" alt="Contato via WhatsApp">

                </div>
            </a>
        </div>
    </div>
</div>
<?php
$data = get_field('sessao_3');
if ($data) :
?>
    <section id="section-content-full">
        <div class="container">
            <div class="row line-centered">
                <?php foreach ($data['coluna_de_texto'] as $element) : ?>
                    <div class="col-12 col-lg-6 col-text">
                        <h2 class="title-large">
                            <?= $element['titulo']; ?>
                        </h2>
                        <?= $element['texto']; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php get_template_part('includes/sections-globals/cartao-bndes', null, null); ?>
<?php get_template_part('includes/sections-globals/politica-de-qualidade', null, null); ?>
<?php get_template_part('includes/sections-globals/download-catalogo', null, null); ?>
<?php get_template_part('includes/sections-globals/produtos-relacionados', null, null); ?>
<?php get_template_part('includes/sections-globals/texto-apoio', null, null); ?>

<?php get_template_part('includes/sections-globals/section-contact', null, null); ?>

<?php get_template_part('footer', null, null); ?>