<?php
// Template Name: Single Normas Técinicas
?>
<?php 
    $args = array(
    'page' => 'single-normas-tecnicas',
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

<?php 
    $data = get_field('sessao_1');
    if($data): 

?>
    <section id="section-intro">
        <div class="container">
            <div class="row line-content">
                <div class="col-lg-6 col-12 col-text">
                    <h2 class="title-large">
                        <?= $data['titulo']; ?>
                    </h2>
                    <?= $data['texto']; ?>
                </div>
                <div class="col-lg-6 col-12 col-form">
                    <?php get_template_part('includes/components/form-sticky', null, $null); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<section id="section-content-full">
    <div class="container">
        <?php 
            $data = get_field('sessao_2'); 
            if($data):
        ?>
            <div class="row line-centered">
                <div class="col-12 col-lg-6 col-img d-none d-lg-block">
					<?php if($data['imagem']['url'] != null): ?>
                    <img src="<?= $data['imagem']['url']; ?>" alt="<?= $data['imagem']['alt']; ?>" title="<?= $data['imagem']['title']; ?>"  >
					<?php endif; ?>
                </div>
                <div class="col-12 col-lg-6 col-text">
                    <h2 class="title-large">
                        <?= $data['titulo']; ?>
                    </h2>
                    <?= $data['texto']; ?>
                </div>
                <div class="col-12 col-lg-6 col-img d-lg-none">
                    <?php if($data['imagem']['url'] != null): ?>
                        <img src="<?= $data['imagem']['url']; ?>" alt="<?= $data['imagem']['alt']; ?>" title="<?= $data['imagem']['title']; ?>"   >
                    <?php endif; ?>

                </div>
            </div>
        <?php endif; ?>
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
<?php get_template_part('includes/sections-globals/cartao-bndes', null, null); ?>
<?php get_template_part('includes/sections-globals/politica-de-qualidade', null, null); ?>
<?php get_template_part('includes/sections-globals/download-catalogo', null, null); ?>
<?php get_template_part('includes/sections-globals/produtos-relacionados', null, null); ?>
<?php get_template_part('includes/sections-globals/texto-apoio', null, null); ?>

<?php get_template_part('includes/sections-globals/section-contact', null, null); ?>

<?php get_template_part('footer', null, null); ?> 

