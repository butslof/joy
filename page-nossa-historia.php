<?php
// Template Name: Nossa História
?>
<?php 
    $args = array(
    'page' => 'nossa-historia',
    'class' => ''
    ); 
?>

<?php get_template_part('header', null, $args); ?>

<?php 
    $args = array(
        'title' => 'Nossa História'
    );
    get_template_part('includes/sections-globals/section-intro-int', null, $args); 
?>

<?php get_template_part('includes/breadcrumb', null, null); ?>
<?php 

    $data = get_field('sessao_1'); 
    if($data):

?>
    <section id="section-sobre">
        <div class="container">
            <div class="row line-centered">
                <div class="col-12 col-lg-6 col-img d-none d-lg-block">
                    <img src="<?= $data['imagem']['url'] ;?>"  alt="<?= $data['imagem']['alt'] ;?>" title="<?= $data['imagem']['title'] ;?>">
                </div>
                <div class="col-12 col-lg-6 col-text">
                    <?= $data['texto_paragrafo_1'];?>
                    <img src="<?= $data['imagem']['url'] ;?>"  alt="<?= $data['imagem']['alt'] ;?>" title="<?= $data['imagem']['title'] ;?>" class="d-lg-none img-fluid" >
                    <?= $data['restante_dos_paragrafos'];?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php 

    $data = get_field('sessao_2'); 
    if($data):

?>
    <section id="detalhes-que-fazem">
        <div class="container">
            <div class="row line-centered splide  splide-cards-top">
                <div class="col-12 col-lg-4">
                    <h2 class="title-large">
                       <?= $data['titulo']; ?>
                    </h2>
                    <?= $data['texto']; ?>
                </div>
                <div class="col-l2 col-lg-8 col-cards  splide__track">
                    <div class="col-cards splide__list">
                        <?php foreach($data['cards'] as $element): ?>
                            <div class="splide__slide">
                                <div class="box">
                                    <img src="<?= $element['imagem']; ?>" alt="<?= strip_tags($element['titulo']); ?>" title="<?= strip_tags($element['titulo']); ?>" >
                                    <h3 class="title"><?= $element['titulo']; ?></h3>
                                    <p>
                                        <?= $element['texto']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php 
    $data = get_field('sessao_3'); 
    if($data):
?>
<section id="section-galeria">
    <div class="container">
        <div class="row line d-none d-lg-flex ">
            <div class="col-12 col-lg-8 col-galeria">
                <div class="box box-1">
                    <img src="<?= $data['imagem_1']['url'] ;?>" alt="<?= $data['imagem_1']['alt'] ;?>" title="<?= $data['imagem_1']['title'] ;?>" >
                </div>
                <div class="box box-2">
                    <img src="<?= $data['imagem_2']['url'] ;?>" alt="<?= $data['imagem_2']['alt'] ;?>" title="<?= $data['imagem_2']['title'] ;?>" >
                    <img src="<?= $data['imagem_3']['url'] ;?>" alt="<?= $data['imagem_3']['alt'] ;?>" title="<?= $data['imagem_3']['title'] ;?>" >
                </div>
            </div>
            <div class="col-12 col-lg-4 col-galeria">
                <div class="box box-3">
                    <img src="<?= $data['imagem_4']['url'] ;?>" alt="<?= $data['imagem_4']['alt'] ;?>" title="<?= $data['imagem_4']['title'] ;?>" >
                </div>
                <div class="box box-4">
                    <img src="<?= $data['imagem_5']['url'] ;?>" alt="<?= $data['imagem_5']['alt'] ;?>" title="<?= $data['imagem_5']['title'] ;?>" >
                </div>
            </div>
        </div>
        <div class="row d-lg-none">
            <div class="splide  splide-galeria">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="splide__slide"> 
                            <img src="<?= $data['imagem_1']['url'] ;?>" alt="<?= $data['imagem_1']['alt'] ;?>" title="<?= $data['imagem_1']['title'] ;?>"  >
                        </div>
                        <div class="splide__slide"> 
                            <img src="<?= $data['imagem_2']['url'] ;?>" alt="<?= $data['imagem_2']['alt'] ;?>" title="<?= $data['imagem_2']['title'] ;?>"  >
                        </div>
                        <div class="splide__slide"> 
                            <img src="<?= $data['imagem_3']['url'] ;?>" alt="<?= $data['imagem_3']['alt'] ;?>" title="<?= $data['imagem_3']['title'] ;?>"  >
                        </div>
                        <div class="splide__slide"> 
                            <img src="<?= $data['imagem_4']['url'] ;?>" alt="<?= $data['imagem_4']['alt'] ;?>" title="<?= $data['imagem_4']['title'] ;?>"  >
                        </div>
                        <div class="splide__slide"> 
                            <img src="<?= $data['imagem_5']['url'] ;?>" alt="<?= $data['imagem_5']['alt'] ;?>" title="<?= $data['imagem_5']['title'] ;?>"  >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
    $data = get_field('sessao_4'); 
    if($data):
?>
<section id="ideias">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title-large">
                    <?= $data['titulo'] ;?>
                </h2>
                <div class="p-centered margin-0-auto">
                    <?= $data['texto'] ;?>
                </div>
            </div>
        </div>
        <div class="row line-cards">
            <div class="col-l2 col-lg-4">
                <div class="box">
                    <img src="<?= $data['card_1']['imagem']; ?>" alt="<?= strip_tags($data['card_1']['titulo']); ?>" title="<?= strip_tags($data['card_1']['titulo']); ?>" class="no-lazy">
                    <h3 class="title">
                        <?= $data['card_1']['titulo']; ?>
                    </h3>
                    <p>
                        <?= $data['card_1']['texto']; ?>
                    </p>
                </div>
            </div>
            <div class="col-l2 col-lg-4">
                <div class="box">
                    <img src="<?= $data['card_2']['imagem']; ?>" alt="<?= strip_tags($data['card_2']['titulo']); ?>" title="<?= strip_tags($data['card_2']['titulo']); ?>"  class="no-lazy">
                    <h3 class="title">
                        <?= $data['card_2']['titulo']; ?>
                    </h3>
                    <p>
                        <?= $data['card_2']['texto']; ?>
                    </p>
                </div>
            </div>
            <div class="col-l2 col-lg-4">
                <div class="box">
                    <img src="<?= $data['card_3']['imagem']; ?>" alt="<?= strip_tags($data['card_3']['titulo']); ?>" title="<?= strip_tags($data['card_3']['titulo']); ?>"  class="no-lazy">
                    <h3 class="title">
                        <?= $data['card_3']['titulo']; ?>
                    </h3>
                    <ul>
                        <?php foreach($data['card_3']['texto'] as $items): ?>
                        
                            <li>
                                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/icons/check-all-svgrepo-com.svg" alt="check" title="check" class="no-lazy">
                                <?= $items['item']; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_template_part('includes/sections-globals/politica-de-qualidade', null, null); ?>
<?php get_template_part('includes/sections-globals/section-contact', null, null); ?>


<?php get_template_part('footer', null, null); ?> 

<script>
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
    var splideGaleria = new Splide( '.splide-galeria', {
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
    splideGaleria.mount();
</script>