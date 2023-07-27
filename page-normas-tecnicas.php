<?php
// Template Name: Normas Técinicas
?>
<?php 
    $args = array(
    'page' => 'normas-tecnicas',
    'class' => ''
    ); 
?>

<?php get_template_part('header', null, $args); ?>

<?php 
    $args = array(
        'title' => get_the_title()
    );
    get_template_part('includes/sections-globals/section-intro-int', null, $args); 
?>

<?php get_template_part('includes/breadcrumb', null, null); ?>
<?php $data = get_field('sessao_1'); ?>
<section id="section-intro">
    <div class="container">
        <div class="row line-intro">
            <div class="col-12 text-center">
                <div class="p-centered margin-0-auto">
                   <?= $data['texto']; ?>
                </div>
            </div>
        </div>


        <?php
            if(wp_is_mobile() == false){
                $query = new WP_Query(array(
                    'posts_per_page'=> -1,
                    'post_type'        => 'cpt_180',
                    'post_status' => 'publish',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'paged' => $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
                )); 
            }
            else{
                $query = new WP_Query(array(
                    'posts_per_page'=> 5,
                    'post_type'        => 'cpt_180',
                    'post_status' => 'publish',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'paged' => $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
                )); 
            }
            if( $query->have_posts() ) :
                $dlist = [];

        ?>   
        <div class="row line-content">
            <div class="col-lg-6 col-12 col-cards">
                <div class="row container-norm-load-more">
                    <?php while( $query->have_posts() ) : $query->the_post(); array_push($dlist, get_the_ID()); ?>
                        <div class="col-12 col-lg-6">
                            <?php 
                                $args = array(
                                    'title' => limit_words(get_the_title(),100),
                                    'text' => limit_words(get_field('texto_introdutorio_card_norma'), 200),
                                    'link' => get_the_permalink()
                                );
                                get_template_part('includes/components/card-normas', null, $args); 
                            ?> 
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php 
                    $args = array(
                        'class' => 'norm-loadding'
                    );
                    get_template_part('includes/components/loadding', null, $args); 
                ?>
                <div class="row d-lg-none">
                    <div class="col-12">
                        <button class="button button-green" id="button-load-more-norm" total-pagination-norm="<?= $query->max_num_pages; ?>" data-pagination-norm="1" onclick="loadMoreNorm(<?= json_encode($dlist); ?>, this)">Carregar mais normas <i class="fa fa-arrow-down"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 col-form">
                <?php get_template_part('includes/components/form-sticky', null, null); ?>
            </div>
        </div>
        <?php                  
            wp_reset_postdata();
            endif;
        ?>
    </div>
</section>

<?php get_template_part('includes/sections-globals/politica-de-qualidade', null, null); ?>
<?php get_template_part('includes/sections-globals/download-catalogo', null, null); ?>
<?php get_template_part('includes/sections-globals/nossos-produtos', null, null); ?>
<?php get_template_part('includes/sections-globals/section-contact', null, null); ?>


<?php get_template_part('footer', null, null); ?> 

<script>
var windowWidth = window.innerWidth;
if(windowWidth <= 1023){
    function loadMoreNorm(list){
        var wpVars = JSON.parse(hoist);
        const containerPosts = document.querySelector(".container-norm-load-more");
        const loading = document.querySelector(".norm-loadding");
        loading.style.display = "block";
        const buttondataPagination = document.getElementById('button-load-more-norm');
        const dataPagination = buttondataPagination.getAttribute('data-pagination-norm');
        const totalPagination = buttondataPagination.getAttribute('total-pagination-norm');
    
        let params = new URLSearchParams();
        params.append("action", "load_more_norm");
        params.append("list", list);
        params.append("pageOffset", dataPagination);    

        axios.post(wpVars.admin_url, params).then((res) => {
            loading.style.display = "none";
            containerPosts.innerHTML +=(res.data);
            buttondataPagination.setAttribute('data-pagination-norm', parseInt(dataPagination) + parseInt(1));
            if(buttondataPagination.getAttribute('data-pagination-norm') == totalPagination ){
                buttondataPagination.style.display = "none";
            }
        });
    }
}
</script>

<script>
    var splideCardsTop = new Splide( '.splide-cards-top', {
        perPage: 1,
        pagination:  false,
        arrows: true,
        mediaQuery: 'min',
        breakpoints: {
            1024: {
                destroy: true
            },
        }
    } );
    splideCardsTop.mount();
    var splideGaleria = new Splide( '.splide-galeria', {
        perPage: 1,
        pagination:  false,
        arrows: true,
        mediaQuery: 'min',
        breakpoints: {
            1024: {
                destroy: true
            },
        }
    } );
    splideGaleria.mount();
</script>