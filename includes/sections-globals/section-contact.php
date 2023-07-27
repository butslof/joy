<?php 

    $data = get_field('contato_footer', 'option'); 
    if($data):
?>
<section id="section-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 col-img d-none d-lg-block">
                <img src="<?= $data['persona']; ?>" alt="Persona Contato" title="Persona Contato">
            </div>
            <div class="col-lg-6 col-12 col-text">
                <h2 class="title-large">
                  <?= $data['titulo']; ?>
                </h2> 
                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/risco-lapis.png" class="risco-lapis" alt="Risco Lápis" title="Risco Lápis" >
                <?= $data['texto']; ?>
                <form method="post" >
                    <input type="hidden" name="Formulário" value="Contato">
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
                    <div class="row">
                        <div class="col-12">
                            <textarea class="form-control" name="Mensagem" placeholder="Mensagem"></textarea>
                            <p>
                                Estou ciente e de acordo que os dados fornecidos acima, serão mantidos em sigilo e utilizadas para contato com fins de relacionamento comercial.
                            </p>
                        </div>
                    </div>
                    <button type="submit" class="button button-green">Enviar Mensagem <i class="fa fa-chevron-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>