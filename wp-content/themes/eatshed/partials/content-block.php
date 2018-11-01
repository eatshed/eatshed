<div class="content-block container">
    <div class="columns">
        <div class="column is-half">
            <img class="content-block__image" src="<?php the_field('content_image') ?>" alt="" />
        </div>
        <div class="column is-half is-offset-1">
            <h2 class="content-block__title"><?php the_field('content_title');?>
            <span class="content-block__sub"><?php the_field('content_subtitle');?></span></h2>
            <?php the_field('content_para');?>
            <a class="btn btn--primary" href="<?php the_field('content_link_url');?>"><?php the_field('content_link_title');?></a>
        </div>
    </div>
</div>
