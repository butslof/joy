
<?php 
    $featured_posts = get_field('produtos_relacionados'); 
    if($featured_posts):
      
        $data = get_field('produtos_relacionados','option');
?>
    <section id="produtos-relacionados">
        <div class="container">
            <div class="row line-intro">
                <div class="col-12 text-center">
                    <h2 class="title-large">
                        <?= $data['titulo']; ?>
                    </h2>
                    <div class="p-centered margin-0-auto">
                        <?= $data['texto']; ?>
                    </div>
                </div>
            </div>
            <div class="row line-content">
                <div class="col-12">
                    <div class="splide  splide-produtos-relacionados">
                        <div class="splide__track">
                            <div class="splide__list">
                                <?php foreach($featured_posts as $element):  ?>
                                <div class="splide__slide"> 
                                    <?php 
                                        $args = array(
                                            'title' => limit_words(get_the_title($element->ID), 100),
                                            'text' => limit_words(get_field('texto_introdutorio_cards_produto', $element->ID), 200),
                                            'text-button' => 'SAIBA MAIS +', 
                                            'image' => get_the_post_thumbnail_url($element->ID), 
                                            'alt_image' => get_post_meta( get_post_thumbnail_id($element->ID), '_wp_attachment_image_alt', true),
                                            'title_image' => get_the_title(get_post_thumbnail_id($element->ID)),
                                            'link' => get_the_permalink($element->ID)
                                        );
                                        get_template_part('includes/components/card-one', null, $args); 
                                    ?> 
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var splideCardsTop = new Splide( '.splide-produtos-relacionados', {
            perPage: 3,
            pagination:  true,
            arrows: true,
            breakpoints: {
                1023: {
                    perPage: 1,
                    pagination:  false
                },
            }
        } );
        splideCardsTop.mount();
    </script>
<?php wp_reset_postdata(); ?>
<?php endif; ?>