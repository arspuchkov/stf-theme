<section id="gallery">
    <div class="gallery-title container wow fadeInUp" data-wow-delay="0.1s">
        <h2>
            <?php the_field('gallery_title')?>
        </h2>
    </div>
<div class="container">
     <div class="gallery-wrap">

          <div class="gallery-carousel owl-carousel owl-theme">
              <?php if ( have_rows( 'gallery' ) ): ?>
                  <?php while ( have_rows( 'gallery') ): the_row(); ?>
                        <div class="item">
                             <img src="<?php the_sub_field('image');?>" alt="item">
                        </div>
                  <?php endwhile; ?>
              <?php endif; ?>
          </div>

          <div class="arrow-block"></div>
     </div>
</div>

</section>