<?php


class comet_footer_about extends WP_Widget {

    public function __construct()
    {
        parent::__construct('comet-footer-about', 'Comet Footer About', array(
            'description' => __('This is the Footer About for Comet Theme', 'comet'),
        ));
    }

    public function widget($args, $instance)
    { ?>
        
        <?php echo $args['before_widget']; ?>

            <?php echo $args['before_title']; ?>About Comet<?php echo $args['after_title']; ?>

            <p>
                <?php echo $instance['content']; ?>
            </p>

            <?php echo isset($instance['button-link']) ? '<a href="'. $instance['button-link'] .'" class="btn btn-color-out btn-sm">'. $instance['button'] .'</a>' : '' ?>
            

        <?php echo $args['after_widget']; ?>
            
    <?php }

    public function form( $instance )
    { ?>
        <p>
            <label for="<?php echo $this->get_field_id('title') ?>">Title:</label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('title') ?>" value="<?php echo isset($instance['title']) ? $instance['title'] : ''; ?>" id="<?php echo $this->get_field_id('title') ?>">
        </p>

        
        <p>
			<label for="<?php echo $this->get_field_id('content') ?>">Block HTML:	</label>
            <textarea id="<?php echo $this->get_field_id('content') ?>" name="<?php echo $this->get_field_name('content') ?>" rows="6" cols="50" class="widefat code">
            <?php echo isset($instance['content']) ? $instance['content'] : ''; ?>
            </textarea>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('button') ?>">Button:</label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('button') ?>" value="<?php echo isset($instance['button']) ? $instance['button'] : ''; ?>" id="<?php echo $this->get_field_id('button') ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('button-link') ?>">Button Link:</label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('button-link') ?>" value="<?php echo isset($instance['button-link']) ? $instance['button-link'] : ''; ?>" id="<?php echo $this->get_field_id('button-link') ?>">
        </p>

    <?php }

}

add_action( 'widgets_init', 'footer_about_function');

function footer_about_function()
{
    register_widget( 'comet_footer_about' );
}