<?php

$post_type = get_post_type();

if($post_type == "cpt_336" || $post_type == "cpt_338") {
    get_template_part('templates/seo-listagem', null, null); 
}
