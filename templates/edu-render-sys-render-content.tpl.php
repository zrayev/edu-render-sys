<?php
  if (!empty($edu_block['message0'])) {
    hide($edu_block['message0']);
  }
?>
<div <?php print $attributes; ?> class="<?php print $classes; ?>">
  <?php print drupal_render_children($edu_block); ?>
</div>

<?php
//  if (!empty($edu_block['message0'])) {
//    show($edu_block['message0']);
//    print drupal_render($edu_block['message0']);
//  }
?>
