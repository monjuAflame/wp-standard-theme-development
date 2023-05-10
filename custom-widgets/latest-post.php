<?php 

class comet_latest_post extends WP_Widget {



    public function __construct()
    {
        parent::__construct('comet-latest-post', 'Comet Latest Posts', array(
            'description' => 'Custom Latest Posts Widget by Comet Theme'
        ));
    }

    public function widget($args, $instance)
    {   ?>

        <?php echo $args['before_widget'] ?>
            <?php echo $args['before_title'] ?>Latest Posts<?php echo $args['after_title'] ?>

            <?php 
                $posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => $instance['number']
                ));

            ?>

            <ul class="nav">

                <?php while($posts->have_posts()) : $posts->the_post();  ?>

                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        <i class="ti-arrow-right"></i>
                        <?php // if(isset($instance['show_date'])) { ?>
                             <span><?php // the_time( 'd M, F' ); ?></span> 
                        <?php // }  ?>

                         <?php 
                         $the_style = isset( $instance['date'] ) ? $instance['date'] : 'show';

                         if('show' === $the_style) { ?>
                             <span><?php  the_time( 'd M, F' ); ?></span> 
                        <?php  } else { echo ''; }  ?>
                        
                    </a>
                </li>
                <?php endwhile; ?>

            </ul>
        <?php echo $args['after_widget']; ?>

    <?php }

    public function form($instance)
    { ?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" value="<?php if(isset($instance['title'])){ echo $instance['title']; } else { echo ''; } ?>" id="<?php if($this->get_field_id('title')){ echo $this->get_field_id('title'); } else { echo ''; } ?>">
        </p>

        <p>
			<label for="<?php echo $this->get_field_id('number'); ?>">Number of posts to show:</label>
			<input class="tiny-text" id="<?php if($this->get_field_id('number')){ echo $this->get_field_id('number'); } else { echo ''; } ?>" name="<?php echo $this->get_field_name('number'); ?>" type="number" step="1" min="1" value="<?php if(isset($instance['number'])){ echo $instance['number']; } else { echo ''; } ?>" size="3">
        </p>
        
        <!-- <p>
			<input class="checkbox" type="checkbox" id="<?php // echo $this->get_field_id('date'); ?>" name="<?php // echo $this->get_field_name('show_date'); ?>"  <?php // if(isset($instance['show_date'])){ echo 'checked'; } else { echo ''; }  ?>>
			<label for="<?php // echo $this->get_field_id('date'); ?>">Display post date?</label>
        </p> -->

        
        <p>
            <input type="radio" name="<?php echo $this->get_field_name('date') ?>" value="show" id="<?php echo $this->get_field_id('dateshow') ?>" <?php checked($instance['date'], 'show'); ?>>

            <label for="<?php echo $this->get_field_id('dateshow') ?>">Show Date</label>
        </p>
        <p>
            <input type="radio" name="<?php echo $this->get_field_name('date') ?>" value="hide" id="<?php echo $this->get_field_id('datehide') ?>" <?php checked($instance['date'], 'hide'); ?>>

            <label for="<?php echo $this->get_field_id('datehide') ?>">Hide Date</label>
        </p>
        
    <?php }


}

add_action( 'widgets_init', 'latest_post_widget' );

function latest_post_widget(){

    register_widget( 'comet_latest_post' );

}


?>