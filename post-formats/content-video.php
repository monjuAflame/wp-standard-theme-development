<article class="post-single">
    <div class="post-info">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <h6 class="upper"><span>By</span><a href="#"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('d F Y'); ?></span><span class="dot"></span><?php the_tags(); ?></h6>
    </div>
    <div class="post-media">
        <div class="media-video">
        <?php echo wp_oembed_get( get_post_meta( get_the_id(), '_for-video', true ) ); ?>
        </div>
    </div>
    <div class="post-body video">
        <?php the_content(); ?>
        <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a>
        </p>
    </div>
</article>