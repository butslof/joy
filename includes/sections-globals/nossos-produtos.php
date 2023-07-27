<?php 
    $data = get_field('nossos_produtos', 'option');
    $query = new WP_Query(array(
        'posts_per_page'=> 6,
        'post_type'        => 'cpt_162',
        'orderby' => 'title',
        'order' => 'ASC',
        'post_status' => 'publish',
        'paged' => $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
    )); 
    
    if( $query->have_posts() ) :
        $dlist = [];
?>
<section id="section-nossos-produtos">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title-large">
                    <?=  $data['titulo']; ?>
                </h2>
                <div class="p-centered margin-0-auto">
                    <?=  $data['texto']; ?>
                </div>
            </div>
        </div>
        <div class="row line-cards container-products-load-more">
            <?php while( $query->have_posts() ) : $query->the_post();  array_push($dlist, get_the_ID()); ?>
            
                <div class="col-lg-4 col-12">
                    <?php 
                        $args = array(
                            'title' => limit_words(get_the_title(), 100),
                            'text' => limit_words(get_field('texto_introdutorio_cards_produto'), 200),
                            'text-button' => 'SAIBA MAIS +', 
                            'image' => get_the_post_thumbnail_url(), 
                            'alt_image' => get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true),
                            'title_image' => get_the_title(get_post_thumbnail_id()),
                            'link' => get_the_permalink()
                        );
                        get_template_part('includes/components/card-one', null, $args); 
                    
                    ?> 
                </div>
            <?php endwhile; ?>
        </div>
        <?php 
            $args = array(
                'class' => 'loadding-product'
            );
            get_template_part('includes/components/loadding', null, $args); 
        ?>
        <div class="row">
            <div class="col-12 ">
                <button class="button button-green" id="button-load-more-products" total-pagination="<?= $query->max_num_pages; ?>" data-pagination="1" onclick="loadMoreProducts(<?= json_encode($dlist); ?>, this)">Carregar mais produtos <i class="fa fa-arrow-down"></i></button>
            </div>
        </div>
    </div>
</section>
<?php                           
    wp_reset_postdata();
    endif;
?>
<script>
    function loadMoreProducts(list){
        var wpVars = JSON.parse(hoist);
        const containerPosts = document.querySelector(".container-products-load-more");
        const loading = document.querySelector(".loadding-product");
        loading.style.display = "block";
        const buttondataPagination = document.getElementById('button-load-more-products');
        const dataPagination = buttondataPagination.getAttribute('data-pagination');
        const totalPagination = buttondataPagination.getAttribute('total-pagination');
    
       
        let params = new URLSearchParams();
        params.append("action", "load_more_product");
        params.append("list", list);
        params.append("pageOffset", dataPagination);
        

        axios.post(wpVars.admin_url, params).then((res) => {
            loading.style.display = "none";
            containerPosts.innerHTML +=(res.data);
            buttondataPagination.setAttribute('data-pagination', parseInt(dataPagination) + parseInt(1));
            if(buttondataPagination.getAttribute('data-pagination') == totalPagination ){
                buttondataPagination.style.display = "none";
            }
        });
    }
</script>