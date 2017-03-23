<div id="comments_container">
  <?php foreach ($comments as $comment) : ?>
    <div class="comment" id="comment-<?php comment_ID() ?>">
      <div class="commentMeta"><?php comment_author_link() ?> am <?php comment_date('j. F Y') ?> um <?php comment_time('H:i') ?> Uhr</div>
      <?php comment_text() ?>

      <?php if ($comment->comment_approved == '0') : ?>
        <div>Dein Kommentar wird von uns überprüft und schnellstmöglich freigegeben.</div>
      <?php endif; ?>
    </div><!-- .comment -->
   <?php endforeach; ?>
</div><!-- #comments_container -->
