<?php
$args = array(
    'post_type' => 'post',
    'showposts' => '4',
    'meta_key' => 'ed_post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
?>
    <div class="box-sidebar side-padrao side-news shadow border-boxs">
        <div class="text">
            <strong class="title-sidebar">Artigos mais <br>Visitados</strong>
            <?php 
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                <a href="<?= get_permalink() ?>">
                    <div class="d-flex box-post-visitados">
                        <div>
                            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?= get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);?>" title="<?= get_the_title(get_post_thumbnail_id()); ?>">
                        </div>
                        <div>
                            <h2 class="title"><?php echo(limit_words(get_the_title(),50)); ?></h2>
                        </div>
                    </div>
                </a>
                
            <?php 
            endwhile;
            else:  endif;
            wp_reset_query();
            wp_reset_postdata();
            ?>
        </div>
    </div>
<?php endif; ?>