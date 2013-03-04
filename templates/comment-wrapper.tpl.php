<?php
/**
 * @file
 * Returns the HTML for a wrapping container around comments.
 *
 * Complete documentation for this file is available online.
 * @see http://drupal.org/node/1728230
 */

// Render the comments and form first to see if we need headings.
//$comments = render($content['comments']);
//$comment_form = render($content['comment_form']);
?>
<section id="comments" class="comments <?php print $classes; ?>"<?php print $attributes; ?>>

  <?php if ($comments && $node->type != 'forum'): ?>
    <h2 class="comments--title title"><?php print t('Comments'); ?></h2>
  <?php endif; ?>

  <?php print $comments; ?>

  <?php if ($comment_form): ?>
    <h2 class="comments--form-title title comment-form"><?php print t('Add new comment'); ?></h2>
    <?php print $comment_form; ?>
  <?php endif; ?>
</section>
