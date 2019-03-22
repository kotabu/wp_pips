<div id="comment-area">
<div id="comment-open">コメント欄の表示
<div id="comment-container">
<?php if(have_comments()): ?>
  <h3>コメント</h3>
  <ol>
    <?php wp_list_comments(); ?>
  </ol>
<?php endif; ?>
<?php
$commenter = wp_get_current_commenter();
$aria_req = true;
$args = array(
      'title_reply' => 'コメントをする',
      'label_submit' => '送信',
      'comment_notes_before' => '<p class="comment-notes-before">メールアドレスが公開されることはありません。'.
      '<br />*のついている項目は必須です。</p>',
      'fields' => array(
        'author' =>
            '<p class="comment-form-author">'.
            '<label for="author">お名前</label>'.
            ( $req ? '<span class="required">*</span>' : '' ) .'<br />'.
            '<input id="author" name="author" type="text" value="'. esc_attr( $commenter['comment_author'] ).
            '" "size="30"'.$aria_req.'/></p>',
        'email' =>
            '<p class="comment-form-email">'.
            '<label for="email">メールアドレス</label>'.
            ( $req ? '<span class="required">*</span>' : '' ) .'<br />'.
            '<input id="email" name="email" type="text" value="'. esc_attr( $commenter['comment_author_email'] ).
            '" "size="30"'.$aria_req.'/></p>'
      ),
      'comment_field' => '<label for="comment">コメント</label></br><textarea id="comment" name="comment" cols="25" rows="6" plaseholder="comment"></textarea>'
    );
comment_form($args);?>
</div>
</div>
</div>

