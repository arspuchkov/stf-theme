<?php
/*
Template Name: Stockist page
*/?>
<?php get_header();?>
    <div class="stockist-title wow fadeInUp container" data-wow-delay="0.2s">
        <h2 class="col-lg-12"><?php the_title(); ?></h2>
    </div>
    <section id="stockist-content">
    <div class="container">
         <div class="stockist-row">
             <?php if ( have_rows( 'location' ) ): ?>
                 <?php while ( have_rows( 'location' ) ): the_row();
                     $country   = get_sub_field( 'country' );
                     $image     = get_sub_field( 'city_image' );
                     $title     = get_sub_field( 'city_title' );
                     $content   = get_sub_field( 'city_address' );
                     $link      = get_sub_field( 'view_map_link' );
                     ?>
                     <div class="location-row">
                          <div class="country col-lg-4 wow fadeInUp" data-wow-delay="0.2s"><?php echo $country; ?></div>
                          <div class="city col-lg-8 wow fadeInUp" data-wow-delay="0.2s">
                               <img class="city-image" src="<?php echo $image; ?>" alt="image">
                               <div class="address-block">
                                    <h3 class="title"><?php echo $title; ?></h3>
                                    <div class="text">
                                        <?php echo $content; ?>
                                    </div>
                                    <a class="link" href="<?php echo $link; ?>">VIEW IN MAPS</a>
                               </div>
                          </div>
                     </div>
                 <?php endwhile; ?>
             <?php endif; ?>
         </div>
    </div>

<?php get_footer();?>