
<article>
     <div class="look-three container-fluid">
          <div class="look-three-body wow fadeInUp" data-wow-delay="0.1s">
               <div class="center-mask hidden-md hidden-xs scrollme animateme"
                    data-when="view"
                    data-from="0"
                    data-opacity="0.8"
                    data-translatey="-80"
                    data-to="1"
                    data-easing="easeinout"
                    style="background-color: <?php echo $mask; ?>"></div>

               <div class="grey-block hidden-md hidden-xs scrollme animateme"
                    data-when="view"
                    data-from="0"
                    data-opacity="1"
                    data-translatex="20"
                    data-to="1"
                    data-easing="linear"
                    style="background-color: #eff0f1"></div>

               <div class="look-three-image hidden-xs hidden-md hidden-sm scrollme animateme"
                    data-when="view"
                    data-from="0"
                    data-opacity="1"
                    data-translatex="-350"
                    data-to="1"
                    data-easing="easein">
                    <a href="<?php echo $permalink; ?>">
                        <?php echo $image; ?>
                    </a>
                    <div class="look-three-title-wrap">
                         <h3 class="look-three-title scrollme animateme"
                             data-when="view"
                             data-from="1"
                             data-opacity="1"
                             data-translatey="80"
                             data-to="0"
                             data-easing="linear">
                             <?php echo $title; ?>
                         </h3>
                    </div>


               </div>
               <div class="look-three-image-clone hidden-lg visible-md visible-sm visible-xs">
                    <a href="<?php echo $permalink; ?>">
                        <?php echo $image; ?>
                    </a>
                    <div class="look-three-title-wrap">
                         <h3 class="look-three-title scrollme animateme"
                             data-when="view"
                             data-from="1"
                             data-opacity="1"
                             data-translatey="20"
                             data-to="0"
                             data-easing="linear">
                             <?php echo $title; ?>

                         </h3>
                    </div>
               </div>

          </div>
         <?php
         if ($lookShowLink) { ?>
              <div class="view-more-link-three">
                   <a class="view-more" href="<?php echo $permalink; ?>">view more
                        <img src="<?= DIR_URI?>/images/fill-22.svg" alt="arrow">
                   </a>
              </div>
             <?php
         }
         ?>
     </div>
</article>
