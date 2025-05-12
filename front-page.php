<?php
get_template_part('components/header');

if (is_front_page()) :
    get_template_part('components/hero');
    get_template_part('components/benefits');
    get_template_part('components/gallery');
    get_template_part('components/about');
    get_template_part('components/services');
    get_template_part('components/testimonials');
endif;

get_template_part('components/footer');
?>
