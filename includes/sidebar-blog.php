<?php ed_set_post_views(get_the_ID()); ?>
<?php $infos = get_field('informacoes', 'option'); ?>

<div class="col-3 sidebar d-none d-lg-block">
    <div class="box-sidebar box-sidebar-img shadow text-center border-boxs">
        <picture class="logo-sidebar">
            <img  src="<?= get_template_directory_uri() ?>/dist/imgs/logo-footer.png"  alt="Ortopen" title="Ortopen" >
        </picture>
        <div class="text">
            <?php
                $data = get_field('blog_sidebar', 'option'); 
            ?>
            <p >
                <?= $data['texto']  ;?>
            </p>

            <div class="redes-blog">
                <div class="d-flex box">
                    <span class="txt-redes">Siga-nos:</span>
                    <a href="<?= $infos['facebook']; ?>" title="Facebook" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="<?= $infos['instagram']; ?>" title="Instagram" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="<?= $infos['linkedin']; ?>" title="Linkedin" target="_blank" class="item-margin">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('includes/components/box-category-sidebar', null, null); ?>
    <?php get_template_part('includes/components/box-artigos-mais-visitados', null, null); ?>

</div>