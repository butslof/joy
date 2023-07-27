<?php $data = get_field('politica_de_qualidade', 'option'); ?>
<section id="section-politica-de-qualidade">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title-large">
                    <?= $data['titulo']; ?>
                </h2>
                <div class="p-centered margin-0-auto">
                    <?= $data['texto']; ?>
                </div>
            </div>
        </div>
        <div class="splide  splide-cards-politicas">
            <div class="splide__track">
                <div class="row line-cards splide__list">
                    <?php foreach($data['cards'] as $card): ?>
                        <div class="col-lg-4 col-12 splide__slide">
                            <div class="box">
                                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/icons/circule-check.svg" alt="<?= strip_tags($card['texto']); ?>" title="<?= strip_tags($card['texto']); ?>" >
                                <p>
                                    <?= $card['texto']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var splideCardsPoliticas = new Splide( '.splide-cards-politicas', {
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
    splideCardsPoliticas.mount();
</script>