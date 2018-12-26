<?php

get_header(); ?>
<section id="single-head">
    <div class="single-head-bg"
         style="background: url(<?php the_field('head_bg')?>) no-repeat">
         <div class="single-title">
              <h2 class="single-title-number">
                  <?php the_field('head_title'); ?>
              </h2>
         </div>
    </div>
</section>
<section id="single-description">
    <div class="container">
        <h2 class="page-title wow fadeInUp" data-wow-delay="0.2s">
            <?php the_field('title')?>
        </h2>
        <?php if ($main_text = get_field('main_text')): ?>
             <div class="page-description wow fadeInUp" data-wow-delay="0.2s">
                 <?= $main_text ?>
             </div>
        <?php endif; ?>
    </div>
</section>
<section id="static-item">
    <div class="static-item-1 wow fadeInUp" data-wow-delay="0.2s">
        <div class="item-1">
            <img src="<?php the_field('static_item_1')?>" alt="image">
        </div>
    </div>
    <div class="static-item-2 wow fadeInUp container" data-wow-delay="0.2s">
        <div class="item-2">
            <img src="<?php the_field('static_item_2')?>" alt="image">
        </div>
    </div>
</section>
<section id="heading">
    <div class="heading-body container wow fadeInUp" data-wow-delay="0.2s">
        <div class="heading-text">
            <h2 class="heading-title">
                <?php the_field('heading_title')?>
            </h2>
            <?php if ($description = get_field('description')): ?>
                 <div class="description">
                     <?= $description ?>
                 </div>
            <?php endif; ?>
        </div>
        <div class="heading-image">
            <img class="heading-image-2" src="<?php the_field('image')?>" alt="image">
        </div>
    </div>
</section>

<?php get_template_part('section-parts/section-gallery');?>
<?php get_template_part('section-parts/section-download');?>

<div class="become-link  container wow fadeInUp" data-wow-delay="0.1s">
    <a class="become-a" href="<?php the_field('become_stockist_link', 'option')?>">
        <span class="white">BECOME A</span><br>
        STOCKISTS
        <img src="<?= DIR_URI?>/images/fill-22.svg" alt="arrow">
    </a>
    <a class="where" href="<?php the_field('lookbook_bottom_link', 'option')?>">
        <span class="white-link">WHERE TO</span><br>
        FIND IT
        <img src="<?= DIR_URI?>/images/fill-22.svg" alt="arrow">
    </a>
</div>

<?php get_footer(); ?>
