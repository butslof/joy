<?php 
    $args = array(
    'page' => 'blog',
    'class' => 'header-shadow'
    ); 
?>

<?php get_template_part('header', null, $args); ?>
<section class="section-2">
    <?php get_template_part('includes/breadcrumb', null, null); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 container-posts">
                <div class="d-lg-none">
                    <?php get_template_part('includes/components/box-category-sidebar', null, null); ?>
                </div>
                <div class="container">
                <div class="row">
                    <?php 
                        if(have_posts() ) :
                    ?>
                        <?php
        
                            while(have_posts() ) : the_post();

                        ?>
                             <div class="col-lg-6 col-12">
                                <article class="card-component-one">
                                    <a href="<?= get_permalink() ?>" title="<?= strip_tags(get_the_title()); ?>">
                                        <div class="img">
                                        <img src="<?=get_the_post_thumbnail_url();?>"  alt="<?= get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);?>" title="<?= get_the_title(get_post_thumbnail_id()); ?>">
                                        </div>
                                        <div class="content">
                                            <h2 class="title">
                                                <?php echo(limit_words(get_the_title(),55)); ?>
                                            </h2>
                                            <span class="date"><i class="fa fa-calendar"></i> <?= get_the_date() ?></span>
                                            <p>
                                                <?php echo(limit_words(get_the_excerpt(),138)); ?>
                                            </p>
                                            <span class="link">Continuar Lendo <i class="fa fa-arrow-right"></i></span>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        
                        <?php
                        endwhile;
                        ?>
                       
                        <?php
                           
                            wp_reset_postdata();
                            
                        endif;
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center paginacao">
                                    <?php
                                        echo paginate_links( array(
                                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                            // 'total'        => $query->max_num_pages,
                                            'current'      => max( 1, get_query_var( 'paged' ) ),
                                            'format'       => '?paged=%#%',
                                            'show_all'     => false,
                                            'type'         => 'plain',
                                            'end_size'     => 2,
                                            'mid_size'     => 1,
                                            'prev_next'    => false,
                                            // 'prev_text'    => __('« Anterior'),
                                            // 'next_text'    => __('Próximo »'),
                                            // 'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
                                            // 'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
                                            'add_args'     => false,
                                            'add_fragment' => '',
                                        ) );
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-lg-none">
                            <?php get_template_part('includes/components/box-artigos-mais-visitados', null, null); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php 
                $args = array(
                  'numberposts' => 1,
                  'post_type'   => 'post'
                );
                $postagem = get_posts( $args );
                if($postagem != null){
                    include 'includes/sidebar-blog.php'; 
                }
            ?>
        </div>
    </div>
</section>

<?php get_template_part('footer', null, null); ?> 

</body>
</html>