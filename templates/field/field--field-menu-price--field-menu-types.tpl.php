<?php
/**
 * @file
 * Template for field Menu Price.
 */
?>
<?php foreach ($items as $delta => $item): ?>
  <span class="menu__type__price"><?php print render($item); ?></span>
<?php endforeach; ?>
