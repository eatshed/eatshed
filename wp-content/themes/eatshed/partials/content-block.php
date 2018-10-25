<div class="content-block">
    <div>
        <img src="<?php the_field('content_image') ?>" alt="" />
    </div>
    <div>
        <h2><?php the_field('content_title');?>
        <span><?php the_field('content_subtitle');?></span></h2>
        <?php the_field('content_para');?>
        <a href="<?php the_field('content_link_url');?>"><?php the_field('content_link_title');?></a>
    </div>
</div>
