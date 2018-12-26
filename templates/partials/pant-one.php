
     <article id="pant-one">
          <div class="pant-row wow fadeInUp container" data-wow-delay="0.1s">
               <div class="post-pant">

                    <a href="<?php echo $permalink; ?>">
                        <?php echo $imagePost; ?>
                    </a>
                    <div class="pant-one-title-wrap">
                         <h3 class="post-title pant-one scrollme animateme"
                             data-when="view"
                             data-from="1"
                             data-opacity="1"
                             data-translatey="60"
                             data-to="0"
                             data-easing="linear">
                             <?php echo $postTitle; ?>
                         </h3>
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
          </div>
     </article>

