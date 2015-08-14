<?php
/**
 * @file
 * Template for field Menu Types.
 */
?>
<?php foreach ($items as $delta => $item): ?>
  <div class="menu__type"><?php print render($item); ?></div>
<?php endforeach; ?>
