<?php

class TwitterWidgetItem extends WP_widget {

  function __construct() {
    parent::__construct(
      'twitter_widget_id001',
      '[Pips]ツイッタータイムライン',
      array( 'description' => 'Twitterのタイムラインを表示します' )
    );
  }

  public function widget($args, $instance) {

    $dest_title = !empty($instance['setting_title']) ? $instance['setting_title'] : "";
    $dest_twitter_id = !empty($instance['setting_twitter_id']) ? $instance['setting_twitter_id'] : "";

    echo '<div id="twitter-widget">'.$args['before_widget'];
    echo $args['before_title'].$dest_title.$args['after_title'];
    echo '<a class="twitter-timeline" data-height="500" data-theme="dark" href="https://twitter.com/'.$dest_twitter_id.'?ref_src=twsrc%5Etfw">Tweets by '.$dest_twitter_id.'</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';
    echo $args['after_widget'].'</div>';

  }

  public function form($instance) {

    $dest_title = !empty($instance['setting_title']) ? $instance['setting_title'] : "";
    $dest_twitter_id = !empty($instance['setting_twitter_id']) ? $instance['setting_twitter_id'] : "";
?>
    <p>
      <label for="<?php echo $this->get_field_id('setting_title'); ?>">タイトル</label><br>
      <input id="<?php echo $this->get_field_id('setting_title'); ?>" name="<?php echo $this->get_field_name('setting_title'); ?>" type="text" value="<?php echo esc_attr($dest_title); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('setting_twitter_id'); ?>">TwitterのID（@を抜いたもの）</label><br>@
      <input id="<?php echo $this->get_field_id('setting_twitter_id'); ?>" name="<?php echo $this->get_field_name('setting_twitter_id'); ?>" type="text" value="<?php echo $dest_twitter_id; ?>">
    </p>
<?php

  }

  public function update($new_instance, $old_instance) {

    $instance = array();
    $instance['setting_title'] = !empty($new_instance['setting_title']) ? $new_instance['setting_title'] : "";
    $instance['setting_twitter_id'] = !empty($new_instance['setting_twitter_id']) ? $new_instance['setting_twitter_id'] : "";

    return $instance;
  }

}

add_action( 'widgets_init', function(){ register_widget('TwitterWidgetItem'); } );


class ProfileWidgetItem extends WP_widget {

  function __construct() {
    parent::__construct(
      'profile_widget_id001',
      '[Pips]プロフィール',
      array( 'description' => '自身のプロフィールを表示します' )
    );
  }

  public function widget($args, $instance) {

    $dest_title = !empty($instance['setting_title']) ? $instance['setting_title'] : "";
    $dest_url = !empty($instance['setting_url']) ? $instance['setting_url'] : "";
    $dest_img = !empty($instance['setting_img']) ? $instance['setting_img'] : "";
    $dest_name = !empty($instance['setting_name']) ? $instance['setting_name'] : "";
    $dest_textarea = !empty($instance['setting_textarea']) ? $instance['setting_textarea'] : "";

    echo '<div id="profile-widget">'.$args['before_widget'];
    echo $args['before_title'].$dest_title.$args['after_title'];
    echo '<a href="'.$dest_url.'"><img src="'.$dest_img.'" align="middle"/></a><p class="name">'.$dest_name.'</p><p>'.$dest_textarea.'</p>';
    echo $args['after_widget'].'</div>';

  }

  public function form($instance) {

    $dest_title = !empty($instance['setting_title']) ? $instance['setting_title'] : "";
    $dest_url = !empty($instance['setting_url']) ? $instance['setting_url'] : "";
    $dest_img = !empty($instance['setting_img']) ? $instance['setting_img'] : "";
    $dest_name = !empty($instance['setting_name']) ? $instance['setting_name'] : "";
    $dest_textarea = !empty($instance['setting_textarea']) ? $instance['setting_textarea'] : "";
?>
    <p>
      <label for="<?php echo $this->get_field_id('setting_title'); ?>">タイトル</label><br>
      <input id="<?php echo $this->get_field_id('setting_title'); ?>" name="<?php echo $this->get_field_name('setting_title'); ?>" type="text" value="<?php echo esc_attr($dest_title); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('setting_url'); ?>">リンク</label><br>
      <input id="<?php echo $this->get_field_id('setting_url'); ?>" name="<?php echo $this->get_field_name('setting_url'); ?>" type="text" value="<?php echo $dest_url; ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('setting_img'); ?>">画像</label><br>
      <?php
          $show_p = '';
          $show_img = '';
          if ( empty( $dest_img ) ) {
            $show_img = ' style="display: none;" ';
         } else {
            $show_p = ' style="display: none;" ';
          }
      ?>
      <p class="fixed-image-text" <?php echo $show_p; ?>>画像が未選択です</p>
      <p><img class="fixed-image-view" src="<?php echo $dest_img; ?>" width="260" <?php echo $show_img; ?>></p>
      <input class="fixed-image-url" id="<?php echo $this->get_field_id('setting_img'); ?>" name="<?php echo $this->get_field_name('setting_img'); ?>" type="text" value="<?php echo $dest_img; ?>">
      <button type="button" class="fixed-select-image">画像を選択</button>
      <button type="button" class="fixed-delete-image" <?php echo $show_img; ?>>画像を削除</button>
    </p>
    <script>
      jQuery(document).ready(function($) {

        var frame;
        const placeholder = jQuery('.fixed-image-text');
        const imageUrl = jQuery('.fixed-image-url');
        const imageView = jQuery('.fixed-image-view');
        const deleteImage = jQuery('.fixed-delete-image');

        jQuery('.fixed-select-image').on('click', function(e){
          e.preventDefault();

          if ( frame ) {
            frame.open();
            return;
          }

          frame = wp.media({
            title: '画像を選択',
            library: {
              type: 'image'
            },
            button: {
              text: '画像を追加する'
            },
            multiple: false
          });

          frame.on('select', function(){
            var images = frame.state().get('selection');
            images.each(function(file) {
              placeholder.css('display', 'none');
              imageUrl.val(file.toJSON().url);
              imageView.attr('src', file.toJSON().url).css('display', 'block');
              deleteImage.css('display', 'inline-block');
            });
            imageUrl.trigger('change');
          });

          frame.open();
        });

        jQuery('.fixed-delete-image').off().on('click', function(e){
          e.preventDefault();
          imageUrl.val('');
          imageView.css('display', 'none');
          deleteImage.css('display', 'none');
          imageUrl.trigger('change');
        });

      });
    </script>
    <p>
      <label for="<?php echo $this->get_field_id('setting_name'); ?>">名前</label><br>
      <input id="<?php echo $this->get_field_id('setting_name'); ?>" name="<?php echo $this->get_field_name('setting_name'); ?>" type="text" value="<?php echo esc_attr($dest_name); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('setting_textarea'); ?>">テキスト</label><br>
      <textarea id="<?php echo $this->get_field_id('setting_textarea'); ?>" name="<?php echo $this->get_field_name('setting_textarea'); ?>" type="text"><?php echo $dest_textarea; ?></textarea>
    </p>

<?php

  }

  public function update($new_instance, $old_instance) {

    $instance = array();
    $instance['setting_title'] = !empty($new_instance['setting_title']) ? $new_instance['setting_title'] : "";
    $instance['setting_url'] = !empty($new_instance['setting_url']) ? $new_instance['setting_url'] : "";
    $instance['setting_img'] = !empty($new_instance['setting_img']) ? $new_instance['setting_img'] : "";
    $instance['setting_name'] = !empty($new_instance['setting_name']) ? $new_instance['setting_name'] : "";
    $instance['setting_textarea'] = !empty($new_instance['setting_textarea']) ? $new_instance['setting_textarea'] : "";

    return $instance;
  }

}

add_action( 'widgets_init', function(){ register_widget('ProfileWidgetItem'); } );

?>
