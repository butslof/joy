<!doctype html>

<html lang="pt">



  <head>
      
      <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118574624-37"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-118574624-37');
	</script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P9LBHTD');</script>
	<!-- End Google Tag Manager -->

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?= get_template_directory_uri(); ?>/dist/imgs/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title><?= wp_title('|') ?></title> 
    
    <?php wp_head();?>

    <script>

    if ( window.history.replaceState ) {

        window.history.replaceState( null, null, window.location.href );

    }

    </script>

  </head>

  <body class="<?= str_replace(".php","",get_page_template_slug()) ?> <?= $args['class']; ?>" >
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9LBHTD"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
  
    <!-- HEADER -->
    <?php $infos = get_field('informacoes', 'option'); ?>
    <header class="sticky-top" id="menu-top" >
      <div class="faixa-top d-none d-lg-block">
        <div class="container">
          <div class="col-12 column-items">
            <div class="box">
              <a href="<?= $infos['link_endereco']; ?>" target="_blank" title="Endereço">
                <i class="fa fa-map-marker"></i>
                <?= $infos['endereco']; ?>
              </a>
            </div>
            <div class="box box-redes-desk">
              <a href="mailto:<?= $infos['e-mail']; ?>" title="E-mail" >
                <i class="fa fa-envelope-o"></i>
                <?= $infos['e-mail']; ?>
              </a>
              <span class="divisor-faixa-top">
              </span>
              <a href="https://api.whatsapp.com/send?phone=55<?= formatNumber($infos['whatsapp']) ;?>" target="_blank" title="WhatsApp" class="whats-tracking extra-bold" >
                <i class="fa fa-whatsapp"></i>
                <?= $infos['whatsapp']; ?>
              </a>
              <span class="divisor-faixa-top">
              </span>
              <a href="tel:0<?= formatNumber($infos['telefone']) ;?>" title=" Solicite um orçamento" >
                <i class="fa fa-phone"></i>
                Solicite um orçamento: 
                <span class="extra-bold">
                <?= $infos['telefone']; ?>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">

        <div class="row">

            <div class="col-lg-2 col-12">

              <a href="<?= get_home_url(); ?>/"><img src="<?= get_template_directory_uri(); ?>/dist/imgs/logo.png" alt="Joy Tubos" class="logo-header"></a>

              <span class="hamb"></span>

            </div>

            <div class="col-lg col-12" id="nav-menu-container">

              <nav class="navbar navbar-expand-lg">

                <div class="collapse navbar-collapse offcanvas-collapse" id="navbarNav">
                  <?php
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object( $locations[ 'header' ] );
                    $items = wp_get_nav_menu_items($menu->term_id, array( 'order' => 'DESC' ));
                    $menus = buildTree($items);
                    // var_dump($menus);
                  ?>
                  <ul class="navbar-nav">
                    <?php $contMenu = 0; ?>
                   <?php foreach( $menus as $item ) : ?>
                      <?php $contMenu++; ?>
                      <?php if( empty( $item['children'] )  && $item['attr_title'] != 'produto'  && $item['attr_title'] != 'normas') : ?>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= $item['url']; ?>" title="<?= $item['title']; ?>" ><?= $item['title']; ?></a>
                          <?php if($item['classes'][0] == 'divisor'): ?>
                            <span class="divisor-link-nav "></span>
                          <?php endif; ?>
                        </li>
                      
                      <?php elseif($item['attr_title'] == 'produto'): ?>
                            <li class="nav-item dropdown d-none d-lg-block">
                              <a class="nav-link dropdown-toggle d-none d-lg-block" href="<?= $item['url']; ?>" title="<?= $item['title']; ?>" id="navbarDropdown" role="button" >
                              <?= $item['title']; ?>
                              </a>
                              <a class="nav-link dropdown-toggle d-lg-none" type="button" title="<?= $item['title']; ?>"  id="navbarDropdown-<?= $contMenu; ?>" data-bs-toggle="dropdown" >
                                <?= $item['title']; ?>
                              </a>
                              <div class="dropdown-menu m-0" aria-labelledby="navbarDropdown-<?= $contMenu; ?>">
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
                                   <?php while( $query->have_posts() ) : $query->the_post();   ?>

                                    <a class="dropdown-item" title="<?= strip_tags(get_the_title()); ?>"  href="<?= get_the_permalink(); ?>">
                                      <i class="fa fa-chevron-right"></i> <?= get_the_title(); ?>
                                    </a>
                                    
                                   <?php endwhile; ?>
                                  
                              </div>
                              <?php if($item['classes'][0] == 'divisor'): ?>
                                <span class="divisor-link-nav divisor-c-drop"></span>
                              <?php endif; ?>
                            </li>
						  <div class="dropdown d-lg-none">
							  <a class="nav-link dropdown-toggle d-none d-lg-block" title="<?= $item['title']; ?>" href="<?= $item['url']; ?>" id="navbarDropdown" role="button" >
								<?= $item['title']; ?>
							  </a>
							  <a class="nav-link dropdown-toggle d-lg-none" title="<?= $item['title']; ?>" type="button" id="navbarDropdown-<?= $contMenu; ?>" data-bs-toggle="dropdown" >
								<?= $item['title']; ?>
							  </a>
							  <div class="dropdown-menu m-0" aria-labelledby="navbarDropdown-<?= $contMenu; ?>">
								  
								   <?php while( $query->have_posts() ) : $query->the_post();   ?>

                                    <a class="dropdown-item" title="<?= strip_tags(get_the_title()); ?>"  href="<?= get_the_permalink(); ?>">
                                      <?= get_the_title(); ?>
                                    </a>
                                   
                                   <?php endwhile; ?>
									
							  </div>
							</div>
					   		<?php                           
							  wp_reset_postdata();
							  endif;
							  ?>
                        <?php elseif($item['attr_title'] == 'normas'): ?>
                            <li class="nav-item dropdown d-none d-lg-block">
                              <a class="nav-link dropdown-toggle d-none d-lg-block" href="<?= $item['url']; ?>" title="<?= $item['title']; ?>" id="navbarDropdown" role="button" >
                              <?= $item['title']; ?>
                              </a>
                              <a class="nav-link dropdown-toggle d-lg-none" type="button" title="<?= $item['title']; ?>"  id="navbarDropdown-<?= $contMenu; ?>" data-bs-toggle="dropdown" >
                                <?= $item['title']; ?>
                              </a>
                              <div class="dropdown-menu m-0" aria-labelledby="navbarDropdown-<?= $contMenu; ?>">
                                    <?php
                                        $query = new WP_Query(array(
                                            'posts_per_page'=> -1,
                                            'post_type'        => 'cpt_180',
                                            'orderby' => 'title',
                                            'order' => 'ASC',
                                            'post_status' => 'publish',
                                            'paged' => $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
                                        )); 
                                        
                                        if( $query->have_posts() ) : 
                                    ?>
                                   <?php while( $query->have_posts() ) : $query->the_post();   ?>

                                    <a class="dropdown-item" title="<?= strip_tags(get_the_title()); ?>"  href="<?= get_the_permalink(); ?>">
                                      <i class="fa fa-chevron-right"></i> <?= get_the_title(); ?>
                                    </a>
                                    
                                   <?php endwhile; ?>
                                  
                              </div>
                              <?php if($item['classes'][0] == 'divisor'): ?>
                                <span class="divisor-link-nav divisor-c-drop"></span>
                              <?php endif; ?>
                            </li>
					   <div class="dropdown d-lg-none">
							  <a class="nav-link dropdown-toggle d-none d-lg-block" title="<?= $item['title']; ?>" href="<?= $item['url']; ?>" id="navbarDropdown" role="button" >
								<?= $item['title']; ?>
							  </a>
							  <a class="nav-link dropdown-toggle d-lg-none" title="<?= $item['title']; ?>" type="button" id="navbarDropdown-<?= $contMenu; ?>" data-bs-toggle="dropdown" >
								<?= $item['title']; ?>
							  </a>
							  <div class="dropdown-menu m-0" aria-labelledby="navbarDropdown-<?= $contMenu; ?>">
								  
								   <?php while( $query->have_posts() ) : $query->the_post();   ?>

                                    <a class="dropdown-item" title="<?= strip_tags(get_the_title()); ?>"  href="<?= get_the_permalink(); ?>">
                                      <?= get_the_title(); ?>
                                    </a>
                                   
                                   <?php endwhile; ?>
									
							  </div>
							</div>
					   		<?php                           
							  wp_reset_postdata();
							  endif;
							  ?>
                      <?php else :   ?>
                        <li class="nav-item dropdown d-none d-lg-block">
                          <a class="nav-link dropdown-toggle d-none d-lg-block" href="<?= $item['url']; ?>" title="<?= $item['title']; ?>" id="navbarDropdown" role="button" >
                          <?= $item['title']; ?>
                          </a>
                          <a class="nav-link dropdown-toggle d-lg-none" type="button" title="<?= $item['title']; ?>"  id="navbarDropdown-<?= $contMenu; ?>" data-bs-toggle="dropdown" >
                            <?= $item['title']; ?>
                          </a>
                          <div class="dropdown-menu m-0" aria-labelledby="navbarDropdown-<?= $contMenu; ?>">
                            <?php foreach( $item['children'] as $category ) : ?>
                                <a class="dropdown-item" title="<?= $category['title']; ?>"  href="<?= $category['url']; ?>">
                                  <i class="fa fa-chevron-right"></i> <?= $category['title']; ?>
                                </a>
                            <?php  endforeach; ?>
                          </div>
                          <?php if($item['classes'][0] == 'divisor'): ?>
                            <span class="divisor-link-nav divisor-c-drop"></span>
                          <?php endif; ?>
                        </li>
                        <div class="dropdown d-lg-none">
                          <a class="nav-link dropdown-toggle d-none d-lg-block" title="<?= $item['title']; ?>" href="<?= $item['url']; ?>" id="navbarDropdown" role="button" >
                            <?= $item['title']; ?>
                          </a>
                          <a class="nav-link dropdown-toggle d-lg-none" title="<?= $item['title']; ?>" type="button" id="navbarDropdown-<?= $contMenu; ?>" data-bs-toggle="dropdown" >
                            <?= $item['title']; ?>
                          </a>
                          <div class="dropdown-menu m-0" aria-labelledby="navbarDropdown-<?= $contMenu; ?>">
                            <?php foreach( $item['children'] as $category ) : ?>
                                <a class="dropdown-item" title="<?= $category['title']; ?>" href="<?= $category['url']; ?>">
                                <?= $category['title']; ?>
                                </a>
                            <?php  endforeach; ?>
                          </div>
                        </div>
                      <?php endif; ?>
                    <?php endforeach; ?>
                    <li class="button-search d-none d-lg-block">
                        <button class="btn-lupa-header " 
                          data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" >
                          <img src="<?= get_template_directory_uri(); ?>/dist/imgs/lupa.svg" alt="Pesquisar" title="Pesquisar">
                        </button>
                        <div class="collapse multi-collapse" id="multiCollapseExample1" >
                            <div class="input-group mt-2 mx-2">
                              <div class="form-outline w-auto">
                                <input type="search" id="form1" class="form-control-dropdown" placeholder="Pesquisar" data-swplive="true" />
                              </div>
                            </div>
                        </div>
                      </li>
                    <li class="d-none d-lg-block">
                      <a href="https://api.whatsapp.com/send?phone=55<?= formatNumber($infos['whatsapp']) ;?>" target="_blank" class="button button-whatsapp whats-tracking" title="WhatsApp">
                        <i class="fa fa-whatsapp"></i> Whatsapp
                      </a>
                    </li>
                    <div class="d-lg-none box-infos">
                        <div class="box">
                          <a href="<?= $infos['link_endereco']; ?>" title="Endereço" target="_blank">
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
                          <a href="tel:0<?= formatNumber($infos['telefone']) ;?>" title="Telefone">
                            <i class="fa fa-phone"></i>
                            <?= $infos['telefone']; ?>
                          </a>
                        </div>
                        <div class="box">
                          <a href="mailto:<?= $infos['e-mail']; ?>" title="E-mail">
                            <i class="fa fa-envelope-o"></i>
                            <?= $infos['e-mail']; ?>
                          </a>
                        </div>
                    </div>
                    <span class="title-redes d-lg-none">Siga-nos nas redes:</span>
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
                    <p class="d-lg-none">
                      <strong>©Joy Tubos Comercial Eireli. <?= date("Y"); ?> </strong>  - Todos os direitos reservados
                    </p>
                  </ul>

              </nav>
            </div>
        </div>
      </div>
    </header>


    <!-- FIM HEADER -->

    <main id="<?= $args['page']; ?>" class="<?= $args['class']; ?>">







