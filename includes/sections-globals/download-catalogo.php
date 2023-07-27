<?php $data = get_field('download_catalogo', 'option'); ?>
<section id="section-download-catalogo">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-catalogo">
                <img src="<?= $data['imagem']; ?>" alt="<?= strip_tags($data['titulo']); ?>" class="d-none d-lg-block" title="<?= strip_tags($data['titulo']); ?>">
            </div>
            <div class="col-lg-5 col-text">
                <h2 class="title">
                  <?= $data['titulo']; ?>
                </h2>
                <img  src="<?= $data['imagem']; ?>" alt="<?= strip_tags($data['titulo']); ?>"  class="d-lg-none" title="<?= strip_tags($data['titulo']); ?>">
                <p>
                    <?= $data['texto']; ?>
                </p>
            </div>
            <div class="col-lg-5 col-12 col-formulario">
                <form method="post" >
                    <input type="hidden" name="Formulário" value="Download">
                    <input type="hidden" name="g-recaptcha-response" class="token" >
                    <div class="row">
                        <div class="col-lg col-12">
                            <label class="label-icon">
                                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/icons/user.svg" >
                            </label>
                            <input type="text" class="form-control" name="Nome" placeholder="Digite seu nome" required >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg col-12">
                            <label class="label-icon">
                                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/icons/phone.svg" >
                            </label>
                            <input type="text" class="form-control phone-mask" name="Telefone" pattern=".{14,}" placeholder="Digite seu telefone" required>
                        </div>
                        <div class="col-lg col-12">
                            <label class="label-icon">
                                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/icons/mail.svg" >
                            </label>
                            <input type="email" class="form-control" name="E-mail" placeholder="Digite seu e-mail" required>
                        </div>
                    </div>
                    <button type="submit" class="button button-green">Baixar Material <i class="fa fa-chevron-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>