<?php
/*
Template Name: Home page
*/?>
<?php get_header();?>

    <section id="home-head">
        <div class="head-center container">
            <div class="head-box scrollme">
                <div class="color-mask scrollme animateme"
                     data-when="view"
                     data-from="0"
                     data-opacity="1"
                     data-translatex="-50"
                     data-translatey="-50"
                     data-to="1"
                     data-easing="linear"
                     style="background: <?php the_field('mask_color_select')?>">
                </div>
                <div class="home-head-item">
                    <img class="head-image scrollme animateme"
                         data-when="view"
                         data-from="0"
                         data-opacity="1"
                         data-translatey="50"
                         data-to="1"
                         data-easing="linear"  src="<?php the_field('head_image')?>" alt="item">
                </div>
                <div class="head-text-wrap">
                    <?php if ($slogan = get_field('slogan')): ?>
                         <div class="head-text">
                              <h1 class="top-title scrollme animateme wow fadeInUp"
                                  data-wow-delay="0.5s"
                                  data-when="view"
                                  data-from="0"
                                  data-opacity="1"
                                  data-translatey="-50"
                                  data-to="1"
                                  data-easing="linear">
                                  <?= $slogan ?>
                              </h1>
                         </div>
                    <?php endif; ?>
                </div>
                <div class="arrow-down">
                    <a href="#page-description">
                        <img src="<?= DIR_URI?>/images/fill-2.svg" alt="arrow-down">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="page-description">
         <div class="text-wrap">
              <h2 class="intro text-center scrollme animateme"
                  data-when="view"
                  data-from="1"
                  data-opacity="1"
                  data-translatey="30"
                  data-to="0"
                  data-easing="linear">
                  <?php the_field('title')?>
              </h2>
         </div>

        <div class="text-box">
            <?php if ($main_text = get_field('main_text')): ?>
                 <div class="description-text wow fadeInUp" data-wow-delay="0.1s">
                     <?= $main_text ?>
                 </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="post-content">
         <?php

         $looks = get_field('post_repeater');

         foreach ($looks as $look) {
             $lookPost = $look['post_object'];
             $lookShowLink = $look['post_link'];

             $image = get_the_post_thumbnail($lookPost);
             $title = get_the_title($lookPost);
             $permalink = get_the_permalink($lookPost);
             $mask = get_post_meta($lookPost->ID, 'post_color_mask', true);
             $lookType = get_field('post_select', $lookPost->ID);

             if ($lookType === 'look_one') {
                 include __DIR__ . '/partials/look-one.php';
             } elseif ($lookType === 'look_two') {
                 include __DIR__ . '/partials/look-two.php';
             } elseif ($lookType === 'look_three') {
                 include __DIR__ . '/partials/look-three.php';
             }
         }
         ?>
     </section>

     <section id="view-lookbook" class="container-fluid">
          <div class="col-sm-7 col-lg-offset-2 col-sm-offset-0 lookbook-row wow fadeInUp" data-wow-delay="0.2s">
               <h2 class="view-lookbook-title">
                   <?php the_field('view_lookbook_title')?>
               </h2>
               <div class="item-block">
                    <div class="lookbook-image" style="background: url(<?php the_field('image')?>)"></div>
                    <div class="loobook-link" style="background-color:  <?php the_field('color_select')?>">
                         <a href="<?php the_field('link_l')?>">
                              <img src="<?= DIR_URI?>/images/fill-33.svg" alt="arrow">
                         </a>
                    </div>
               </div>
          </div>
     </section>
     <div class="container-fluid bottom-row">
          <div class="become-link become-where col-sm-6 col-sm-offset-2">
               <a class="become-a" href="<?php the_field('become_stockist_link', 'options')?>">
                    <span class="white">BECOME A</span><br>
                    STOCKISTS
                    <img src="<?= DIR_URI?>/images/fill-44.svg" alt="arrow">
               </a>
          </div>
     </div>

<?php get_footer();?>