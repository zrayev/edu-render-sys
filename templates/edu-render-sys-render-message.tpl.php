<?php if (!empty($message)): ?>
  <div class="test-message <?php print $classes; ?>">
    <?php print render($message); ?>
  </div>
<?php endif; ?>
