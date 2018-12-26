
<article class="look-one">
     <div class="col-sm-9 col-xs-9 post-body scrollme animateme"
          data-when="enter"
          data-from="0"
          data-opacity="1"
          data-translatey="60"
          data-to="1"
          data-easing="linear">
          <div class="look-one-post wow fadeInUp" data-wow-delay="0.1s">
               <a href="<?php echo $permalink; ?>">
                   <?php echo $image; ?>
               </a>

               <div class="look-one-title-wrap">
                    <h3 class="post-title  post-one scrollme animateme"
                        data-when="view"
                        data-from="1"
                        data-opacity="1"
                        data-translatey="100"
                        data-to="0"
                        data-easing="linear">
                        <?php echo $title; ?>
                    </h3>
               </div>

          </div>

         <?php
         if ($lookShowLink) { ?>
              <div class="view-more-link-one">
                   <a class="view-more" href="<?php echo $permalink; ?>">view more
                        <img src="<?= DIR_URI?>/images/fill-22.svg" alt="arrow">
                   </a>
              </div>
             <?php
         }
         ?>
     </div>
</article>
