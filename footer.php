</main>
<?php $infos = get_field('informacoes', 'option'); ?>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center box-mobile d-lg-none">
        <div class="box">
          <a href="<?= $infos['link_endereco']; ?>" title="Endereço" target="_blank" class="endereco">
            <i class="fa fa-map-marker"></i>
            <?= $infos['endereco']; ?>
          </a>
        </div>
        <div class="box">
          <a href="https://api.whatsapp.com/send?phone=55<?= formatNumber($infos['whatsapp']) ;?>" target="_blank" title="WhatsApp" class="whats-tracking">
            <i class="fa fa-whatsapp"></i>
            <?= $infos['whatsapp']; ?>
          </a>
        </div>
        <div class="box">
          <a href="tel:0<?= formatNumber($infos['telefone']) ;?>" title="Telefone" >
            <i class="fa fa-phone"></i>
            <?= $infos['telefone']; ?>
          </a>
        </div>
        <div class="box">
          <a href="mailto:<?= $infos['e-mail']; ?>" title="E-mail" >
            <i class="fa fa-envelope-o"></i>
            <?= $infos['e-mail']; ?>
          </a>
        </div>
        <div class="box-redes d-lg-none">
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
      <div class="col-lg-3 col-12 column-1 d-none d-lg-block">
        <img src="<?= get_template_directory_uri(); ?>/dist/imgs/logo-footer.png" class="logo-footer" alt="Joy Tubos" title="Joy Tubos" >
        <?php
          $data = get_field('footer', 'option'); 
        ?>
        <p>
          <?= $data['texto']  ;?>
        </p>
        <a href="<?= get_home_url(); ?>/nossa-historia/" title="Nossa História" class="link txt-blue">
          <strong>Saiba Mais</strong>
        </a>
        <div class="box-redes">
          <a href="<?= $infos['facebook']; ?>" title="Facebook" target="_blank">
            <i class="fa fa-facebook redes-social-icon"></i>
          </a>
          <a href="<?= $infos['instagram']; ?>" title="Instagram" target="_blank">
            <i class="fa fa-instagram redes-social-icon"></i>
          </a>
          <a href="<?= $infos['linkedin']; ?>" title="Linkedin" target="_blank" class="item-margin">
            <i class="fa fa-linkedin redes-social-icon"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-2 col-12 column-2 d-none d-lg-block">
        <?php
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object( $locations[ 'footer-1' ] );
          $items = wp_get_nav_menu_items($menu->term_id, array( 'order' => 'DESC' ));
          $menus = buildTree($items);
        ?>
        <?php foreach( $menus as $item ) : ?>
            <a  href="<?= $item['url']; ?>" title="<?= $item['title']; ?>"><?= $item['title']; ?></a>
        <?php endforeach; ?>
      </div>
      <div class="col-lg-4 col-12 column-3 d-none d-lg-block">
        <?php
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object( $locations[ 'footer-2' ] );
          $items = wp_get_nav_menu_items($menu->term_id, array( 'order' => 'DESC' ));
          $menus = buildTree($items);
        ?>
        <?php foreach( $menus as $item ) : ?>
          <?php if( empty( $item['children'] ) ) : ?>
                <a  href="<?= $item['url']; ?>" title="<?= $item['title']; ?>"><?= $item['title']; ?></a>
                <?php
                    $query = new WP_Query(array(
                        'posts_per_page'=> -1,
                        'post_type'        => 'cpt_162',
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'post_status' => 'publish',
                        'paged' => $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
                    )); 
                    
                    if( $query->have_posts() ) : 
                ?>
                <ul class="list">

               <?php while( $query->have_posts() ) : $query->the_post();   ?>

                      <li>
                            <a href="<?= get_the_permalink(); ?>" title="<?= strip_tags(get_the_title()); ?>">
                              <i class="fa fa-chevron-right"></i> <?= get_the_title(); ?>
                            </a>
                      </li>

               <?php endwhile; ?>
                </ul>

               <?php                           
                    wp_reset_postdata();
                    endif;
                ?>
          <?php endif; ?>
        <?php endforeach; ?>
        
      </div> 
      <div class="col-lg-3 col-12 column-4 d-none d-lg-block">
        <div class="box">
          <?php get_template_part('includes/components/buttons/solicite-um-orcamento', null, null); ?> 
        </div>
        <div class="box">
          <a href="<?= $infos['link_endereco']; ?>" target="_blank" title="Endereço" class="endereco">
            <address>
              <strong>Joy Tubos Comercial Eireli</strong><br>
              <?= $infos['endereco']; ?>
            </address>
            <i class="fa fa-map-marker"></i>
          </a>
        </div>
        <div class="box">
          <a href="https://api.whatsapp.com/send?phone=55<?= formatNumber($infos['whatsapp']) ;?>" class="whats-tracking" title="WhatsApp" target="_blank">
            <strong> WhatsApp:</strong> 
            <?= $infos['whatsapp']; ?>
            <i class="fa fa-whatsapp"></i>
          </a>
        </div>
        <div class="box">
          <a href="tel:0<?= formatNumber($infos['telefone']) ;?>" title="Telefone" >
            <strong>Fale conosco:</strong> 
            <?= $infos['telefone']; ?>
            <i class="fa fa-phone"></i>
          </a>
        </div>
        <div class="box">
          <a href="mailto:<?= $infos['e-mail']; ?>" title="E-mail">
            <?= $infos['e-mail']; ?>
            <i class="fa fa-envelope-o"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="direitos">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 d-none d-lg-block">
          <p><strong>©Joy Tubos Comercial Eireli. </strong>  <?= date("Y"); ?> - Todos os direitos reservados</p>
        </div>
        <div class="col-lg-6 col-12 text-lg-end col-img" >
          <a href="https://www.3xceler.com.br/criacao-de-sites/" title="Agencia 3xceler" target="_blank">Criação de Sites:</a>
          <img src="<?= get_template_directory_uri(); ?>/dist/imgs/logo-3xceler.svg" alt="Agencia 3xceler" title="Agencia 3xceler" >
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- tracking here -->
<?php 
  include 'includes/tracking.php'; 
	wp_footer(); 
  include 'includes/scripts-globals.php'; 


?>

</body>
</html>




