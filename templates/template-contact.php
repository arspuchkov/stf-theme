<?php
/*
Template Name: Contact page
*/?>
<?php get_header();?>
<div class="contact-title container">
    <h2><?php the_title(); ?></h2>
</div>
<?php if ($description_text = get_field('description_text')): ?>
     <div class="contact-intro text-center container">
         <?= $description_text ?>
     </div>
<?php endif; ?>
<section id="contact">
     <div class="contact-image-1 wow fadeInUp" data-wow-delay="0.1s">
          <img src="<?php the_field('section_image_1')?>" alt="">
     </div>
          <div class="container form text-center">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
     <div class="contact-image-2">
          <img src="<?php the_field('section_image_2')?>" alt="">
          <div class="contact-image-mask" style="background-color: #f2d8ce"></div>
     </div>
</section>
<section id="contact-accordion">
     <div class="container-fluid contact-row wow fadeInUp" data-wow-delay="0.1s">
         <?php if ( have_rows( 'accordion' ) ): ?>
         <?php while ( have_rows( 'accordion' ) ) : the_row();
              $contactTitle = get_sub_field( 'contact_title' );
              $content = get_sub_field( 'contact_body' );
         ?>
              <div class="accordion-block">
                   <div class="title text-center">
                       <?php echo $contactTitle ; ?>
                   </div>
                   <div class="contact-body text-center">
                       <?php echo $content; ?>
                   </div>
                   <div class="accordion-image">
                        <span class="toggle-image"></span>
                   </div>
              </div>
             <?php endwhile; ?>
         <?php endif; ?>
     </div>
</section>
<?php get_footer();?>
