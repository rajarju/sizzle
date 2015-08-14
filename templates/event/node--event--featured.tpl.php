<?php

/**
 * @file
 * Theme implementation to display an Event node in Featured view mode.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<article class="<?php print $classes; ?>"<?php print $attributes; ?>>
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
</article>
