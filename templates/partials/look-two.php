
<article class="look-two">
     <div class="look-two-body wow fadeInUp" data-wow-delay="0.1s">
          <div class="look-two-title-wrap">
               <h3 class="look-two-title scrollme animateme"
                   data-when="view"
                   data-from="1"
                   data-opacity="1"
                   data-translatey="95"
                   data-to="0"
                   data-easing="linear">
                   <?php echo $title; ?>
               </h3>
          </div>

          <div class="look-two-image">

                   <?php echo $image; ?>

          </div>
          <div class="bg-block"></div>
          <a href="<?php echo $permalink; ?>">
               <div class="look-two-mask" style="background-color: <?php echo $mask; ?>"></div>
          </a>
     </div>
    <?php
    if ($lookShowLink) { ?>
         <div class="view-more-link-two">
              <a class="view-more" href="<?php echo $permalink; ?>">view more
                   <img src="<?= DIR_URI?>/images/fill-22.svg" alt="arrow">
              </a>
         </div>
        <?php
    }
    ?>
</article>
