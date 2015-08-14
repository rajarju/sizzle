<?php
/**
 * @file
 * Template for the Location node layout.
 */
?>
<div class="<?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['slideshow']): ?>
    <div class="panel-pane-region panel-pane-region-slideshow padding--sm--bottom border--sm--bottom">
      <?php print $content['slideshow']; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['top']): ?>
    <div class="panel-pane-region panel-pane-region-top padding--xs--top padding--xs--bottom">
      <div class="container">
        <?php print $content['top']; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['contentmain']): ?>
    <div class="panel-pane-region panel-pane-region-content container padding--lg--top padding--lg--bottom">
      <?php print $content['contentmain']; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['bottom_left'] || $content['bottom_right'] ): ?>
    <div class="row">
      <div class="col-md-6 panel-pane-region panel-pane-region-bottom-left">
        <?php print $content['bottom_left']; ?>
      </div>
      <div class="col-md-6 panel-pane-region panel-pane-region-bottom-right">
        <?php print $content['bottom_right']; ?>
      </div>
    </div>
  <?php endif; ?>
</div>
