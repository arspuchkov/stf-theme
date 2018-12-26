<section id="collection">
    <div class="collection-body container wow fadeInUp" data-wow-delay="0.1s">
        <div class="collection-text">
            <h2 class="title collection">
                <?php the_field('heading_title')?>
            </h2>

            <?php if ($description = get_field('description')): ?>
                 <div class="description">
                     <?= $description ?>
                 </div>
            <?php endif; ?>

        </div>
        <div class="collection-image scrollme">
            <img class="collection-image-2 scrollme animateme"
                 src="<?php the_field('image')?>" alt="image"
                 data-when="enter"
                 data-from="0"
                 data-opacity="1"
                 data-translatey="80"
                 data-to="1"
                 data-easing="linear">
            <div class="collection-image-mask scrollme animateme"
                 data-when="enter"
                 data-from="0"
                 data-opacity="0.8"
                 data-translatex="-50"
                 data-translatey="-100"
                 data-to="1"
                 data-easing="linear"
                 style="background-color: <?php the_field('mask')?>"></div>
        </div>
    </div>
</section>