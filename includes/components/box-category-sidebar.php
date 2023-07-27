<?php 
$term_args = array(
    'taxonomy'               => 'category',
    'orderby'                => 'name',
    'order'                  => 'ASC',
    'hide_empty'             => true,
    'exclude' => 1
);
$term_query = new WP_Term_Query($term_args);
?>
<?php if($term_query->terms): ?>
<div class="box-sidebar side-news shadow text-center border-boxs">
    <div class="text">
        <strong class="title-sidebar">Categorias</strong>
        <ul class="categories-sidebar bullet-golden ">
            <?php
                $contCat = 0;
                foreach ( $term_query->terms as $term ) {
                    $contCat++;
                    if($contCat > 9){
                        echo "<li class='collapse multi-collapse'><a href='" . get_home_url() . "/category/" . $term->slug . "''>" . $term->name. "</a></li>";
                    }else{
                        echo "<li><a href='" . get_home_url() . "/category/" . $term->slug . "''>" . $term->name. "</a></li>";
                    }
                }
            ?>
        </ul>
        <?php if(count($term_query->terms) > 9): ?>
            <a class="btn-mais-category-blog font-exo" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">+ Mais Categorias</a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>