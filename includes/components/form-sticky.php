<div class="form-sticky">
    <h2 class="title">
        Solicite um<br> <span>Orçamento</span>
    </h2>
    <p>
        Preencha o formulário abaixo e receba um orçamento do nosso timaço em seu e-mail!
    </p>
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
                <textarea class="form-control" name="Mensagem" placeholder="Mensagem"></textarea>
            </div>
        </div>
        <button type="submit" class="button button-green">Enviar Mensagem <i class="fa fa-chevron-right"></i></button>
    </form>
</div>  