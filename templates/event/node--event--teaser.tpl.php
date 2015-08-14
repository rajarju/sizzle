<?php
/**
 * @file
 * Template for Event node in Featured view mode.
 */
?>
<article class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <?php print render($content['field_event_featured_image']); ?>

  <a href="<?php print $node_url; ?>" class="link--overlay">
    <h3><?php print $title; ?></h3>

    <div class="bottom">
      <?php if (!empty($content['field_event_location'])): ?>
        <span><?php print $field_event_location[0]['locality'] . ', ' . $field_event_location[0]['administrative_area']; ?></span>
      <?php endif; ?>
      <?php print render($content['field_event_date']); ?>
    </div>
  </a>

  <?php print render($extra); ?>
</article>
