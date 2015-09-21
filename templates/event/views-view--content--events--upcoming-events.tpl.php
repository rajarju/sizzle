<?php
/**
 * @file
 * Template for Upcoming Events.
 */
?>
<?php $rows = array_chunk($rows, 3); ?>
<?php foreach ($rows as $cols): ?>
  <div class="view__row row">
    <?php foreach ($cols as $col): ?>
      <div class="view__col col-md-4 col-sm-6 margin--md--bottom">
        <?php print $col; ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php endforeach; ?>
