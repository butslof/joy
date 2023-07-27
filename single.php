<?php

$post_type = get_post_type();

if($post_type == "cpt_162"){
    get_template_part('templates/single-produtos', null, null); 
}elseif($post_type == "cpt_180"){
    get_template_part('templates/single-normas-tecnicas', null, null); 
}elseif($post_type == "cpt_336" || $post_type == "cpt_338"){
    get_template_part('templates/single-seo', null, null); 
}else{
    get_template_part('templates/single-blog', null, null); 
}