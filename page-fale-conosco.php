<?php
// Template Name: Fale Conosco
?>
<?php 
    $args = array(
    'page' => 'fale-conosco',
    'class' => ''
    ); 
?>

<?php get_template_part('header', null, $args); ?>

<?php 
    $args = array(
        'title' => 'Fale Conosco'
    );
    get_template_part('includes/sections-globals/section-intro-int', null, $args); 
?>

<?php get_template_part('includes/breadcrumb', null, null); ?>
<?php $infos = get_field('informacoes', 'option'); ?>
<?php
$data = get_field('sessao_1'); 
?>
<section id="section-intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h2 class="title-large">
                    <?= $data['titulo']; ?>
                </h2>
                <?= $data['texto']; ?>
                <div class="box-infos">
                    <div class="infos numbers">
                        <a href="<?= $infos['link_endereco']; ?>" title="Endereço" target="_blank" class="endereco">
                            <i class="fa fa-map-marker"></i>
                            <address>
                                <strong>Joy Tubos Comercial Eireli</strong><br>
                                <?= $infos['endereco']; ?>
                            </address>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=55<?= formatNumber($infos['whatsapp']) ;?>" title="WhatsApp" target="_blank" class="whats-tracking">
                            <i class="fa fa-whatsapp"></i>
                            <strong>WhatsApp:</strong> <?= $infos['whatsapp']; ?>
                        </a>
                        <a href="tel:0<?= formatNumber($infos['telefone']) ;?>" title="Telefone" target="_blank">
                            <i class="fa fa-phone"></i>
                            <strong>Fale conosco:</strong> <?= $infos['telefone']; ?>
                        </a>
                        <a href="mailto:<?= $infos['e-mail']; ?>" title="E-mail">
                            <i class="fa fa-envelope-o"></i>
                            <?= $infos['e-mail']; ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 col-form">
                <form method="post" >
                    <input type="hidden" name="Formulário" value="Entre em Contato a Gente!">
                    <input type="hidden" name="g-recaptcha-response" class="token" >
                    <div class="row">
                        <div class="col-12">
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
                            <label class="label-icon">
                                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/icons/icon-assunto.svg" >
                            </label>
                            <input type="text" class="form-control" name="Assunto" placeholder="Assunto" required >
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
<?php
$data = get_field('sessao_2'); 
?>
<section id="section-trabalhe-conosco">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 col-form">
                <h2 class="title-large">
                    <?= $data['titulo']; ?>
                </h2>
                <div class="text-princ">
                    <?= $data['texto']; ?>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="Formulário" value="Trabalhe Conosco">
                    <input type="hidden" name="g-recaptcha-response" class="token" >
                    <div class="row">
                        <div class="col-12 col-lg">
                            <label class="label-icon">
                                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/icons/user.svg" >
                            </label>
                            <input type="text" class="form-control" name="Nome" placeholder="Digite seu nome" required >
                        </div>
                        <div class="col-lg col-12">
                            <label class="label-icon">
                                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/icons/mail.svg" >
                            </label>
                            <input type="email" class="form-control" name="E-mail" placeholder="Digite seu e-mail" required>
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
                                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/icons/icon-location-input.svg" >
                            </label>
                            <input type="text" class="form-control" name="Cidade"  placeholder="Cidade + UF" required>
                        </div>
                        <div class="col-lg col-12 col-file">
                            <label class="input-personalizado">
                                <img class="imagem" />
                                <span class="botao-selecionar-1">+ Escolher Arquivo</span>
                                <span class="botao-selecionar">Adicionar Currículo</span>
                                <input type="file" name="arquivo" accept=".doc,.docx,.pdf" class="input-file form-control">
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <textarea class="form-control" name="Mensagem" placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-button">
                            <p>
                                Estou ciente e de acordo que os dados fornecidos acima, serão mantidos em sigilo e utilizadas para contato com fins de relacionamento comercial.
                            </p>
                            <button type="submit" class="button button-green">Enviar Mensagem <i class="fa fa-chevron-right"></i></button>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-4 d-none d-lg-block">
                <img src="<?= get_template_directory_uri(); ?>/dist/imgs/persona-trabalhe.png" alt="" title="" class="persona">
            </div>
        </div>
    </div>
</section>

<?php 
    $data = get_field('sessao_3');

    if($data['iframe']){
        $args = array(
            'iframe' => $data['iframe']
        );
        get_template_part('includes/sections-globals/maps-iframe', null, $args ); 
    }
?>

<script>
    const $ = document.querySelector.bind(document);
    const previewImg = $('.imagem');
    const fileChooser = $('.input-file');

    fileChooser.onchange = e => {
        const fileToUpload = e.target.files.item(0);
        const reader = new FileReader();
        reader.onload = e => previewImg.src = e.target.result;
        reader.readAsDataURL(fileToUpload);
    };
</script>
<?php get_template_part('footer', null, null); ?> 


