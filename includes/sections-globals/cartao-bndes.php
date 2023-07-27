<?php $data = get_field('cartao_bndes', 'option'); ?>
<section id="section-cartao-bndes">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12 col-persona d-none d-lg-block">
                <img src="<?= $data['persona']; ?>" alt="Persona" title="Persona">
            </div>
            <div class="col-lg-6 col-12 col-text">
                <h2 class="title">
                    <?= $data['titulo_branco']; ?>
                    <span><?= $data['titulo_verde']; ?></span>
                </h2> 
                <img src="<?= $data['cartao']; ?>" class="d-lg-none card-img" alt="Cartão BNDES" title="Cartão BNDES">
                <?= $data['texto']; ?>
                <a href="#section-contact" class="button button-green">
                    Orçamento <i class="fa fa-chevron-right"></i>
                </a>
            </div>
            <div class="col-lg-4 col-card d-none d-lg-block">
                <img src="<?= $data['cartao']; ?>" alt="Cartão BNDES" title="Cartão BNDES">
            </div>
        </div>
    </div>
</section>