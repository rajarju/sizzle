<?php
/**
 * @file
 * Template for field Menu Type.
 */
?>
<?php foreach ($items as $delta => $item): ?>
  <small class="menu__type__type"><?php print render($item); ?></small>
<?php endforeach; ?>
