<?php

add_action( 'widgets_init', 'loans_links_widget' );


function loans_links_widget() {
        register_widget( 'Loans_Links_Widget' );
}

class Loans_Links_Widget extends WP_Widget {


    function __construct(){
        $args = array(
            'name' => 'Links Widget',
            'description' => 'Links Widget'
        );
        parent::__construct('loans_links_widget', '', $args);
    }

    function form ($instance){
        extract($instance);
        $title = !empty($title) ? esc_attr($title) : '';
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('title') ?>">Title: </label>
            <input type="text" name="<?php echo $this->get_field_name('title') ?>" id="<?php echo $this->get_field_id('title') ?>" value="<?php echo $title ?>" class="widefat" />
        </p>

        <?php

    }

    function update($new_instance, $old_instance){

        return $new_instance;
    }

    function widget ($args, $instance) {

        // outputs the content of the widget
        if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }

        $widget_id = 'widget_' . $args['widget_id'];

        $title = apply_filters( 'widget-title', $instance['title'] );
        $links = get_field( 'w_links', $widget_id );

        $html = $args['before_widget'];
        $html .= '<aside class="widget">';
        $html .= $args['before_title'] . $title . $args['after_title'];
        $html .= '<ul class="ul-nav">';

        foreach ( $links as $link ) {
            $html .= '<li><a class="icon-absolute-right" href="' . $link['link_url'] . '"><span class="icon-wrapper"><i class="fas fa-angle-right"></i></span>' . $link['link_text'] . '</a></li>';
        }

        $html .= '</ul></aside>';
        $html .= $args['after_widget'];

        echo $html;
    }

}