<?php
// Template Name: Archives SEO
?>
<?php 
    $args = array(
    'page' => 'archives-seo',
    'class' => ''
    ); 
?>

<?php get_template_part('header', null, $args); ?>

<?php 
    $args = array(
        'title' => post_type_archive_title( '', false )
    );
    get_template_part('includes/sections-globals/section-intro-int', null, $args); 
?>

<?php get_template_part('includes/breadcrumb', null, null); ?>

<section id="section-intro">
    <div class="container">
        <?php
            $query = new WP_Query(array(
                'posts_per_page'=> -1,
                'post_type'        => get_post_type(),
                'post_status' => 'publish',
                'orderby' => 'title',
                'order' => 'ASC',
                'paged' => $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
            )); 
        ?>
        <div class="row line-cards">
            <?php while( $query->have_posts() ) : $query->the_post();  ?>
                <div class="col-lg-4 col-12">
                    <?php 
                        $args = array(
                            'title' => limit_words(get_the_title(),100),
                            'text' => limit_words(get_field('texto_introdutorio'), 120),
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
    </div>
</section>

<?php get_template_part('includes/sections-globals/politica-de-qualidade', null, null); ?>
<?php get_template_part('includes/sections-globals/download-catalogo', null, null); ?>
<?php get_template_part('includes/sections-globals/nossos-produtos', null, null); ?>
<?php get_template_part('includes/sections-globals/section-contact', null, null); ?>

<?php get_template_part('footer', null, null); ?> 
