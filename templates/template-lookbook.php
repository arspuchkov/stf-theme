<?php
/*
Template Name: Lookbook page
*/?>
<?php get_header();?>
    <section id="lookbook-head">
        <div class="lookbook-head-bg"
             style="background: url(<?php the_field('head_bg')?>) no-repeat">
             <h2 class="lookbook-title">
                 <?php the_field('head_title')?>
             </h2>
        </div>
    </section>

    <section id="single-description">
        <div class="container">
            <h2 class="page-title wow fadeInUp" data-wow-delay="0.1s">
                <?php the_field('title')?>
            </h2>
            <?php if ($main_text = get_field('main_text')): ?>
                 <div class="page-description wow fadeInUp" data-wow-delay="0.1s">
                     <?= $main_text ?>
                 </div>
            <?php endif; ?>
        </div>
    </section>

<section class="lookbook-posts">
    <?php

    $looks = get_field('post_repeater');
    $i = 1;
    foreach ($looks as $look) {
        $lookBookPost = $look['post_object'];
        $lookShowLink = $look['post_link'];
        $imagePost = get_the_post_thumbnail($lookBookPost);
        $postTitle = get_the_title($lookBookPost);
        $permalink = get_the_permalink($lookBookPost);

        if ($i % 2 !== 0) {
            include __DIR__ . '/partials/top-one.php';
        } else {
            include __DIR__ . '/partials/pant-one.php';
        }

        $i++;
    }

    ?>

</section>

    <?php get_template_part('section-parts/section-collection');?>
    <?php get_template_part('section-parts/section-gallery');?>
    <?php get_template_part('section-parts/section-download');?>

     <div class="container-fluid bottom-row">
          <div class="become-link become-where col-sm-6 col-sm-offset-2">
               <a class="become-a" href="<?php the_field('become_stockist_link', 'option')?>">
                    <span class="white">BECOME A</span><br>
                    STOCKISTS
                    <img src="<?= DIR_URI?>/images/fill-22.svg" alt="arrow">
               </a>
          </div>
     </div>
<?php get_footer();?>