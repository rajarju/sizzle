<?php
/**
 * @file
 * Template for Featured Events.
 */
?>
<?php $rows = array_chunk($rows, 4); ?>
<?php foreach ($rows as $cols): ?>
  <div class="view__row row">
    <?php foreach ($cols as $col): ?>
      <div class="view__col col-md-3">
        <?php print $col; ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php endforeach; ?>
