<?php
/**
 * @file
 * Template for the Menus layout.
 */
?>
<div class="<?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['slideshow']): ?>
    <div class="panel-pane-region panel-pane-region-slideshow border--sm--bottom">
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

  <div class="container">
    <div class="row padding--lg--top padding--lg--bottom">
      <?php if ($content['left']): ?>
        <div class="col-md-3 panel-pane-region panel-pane-region-left">
          <?php print $content['left']; ?>
        </div>
      <?php endif; ?>
      <?php if ($content['contentmain']): ?>
        <div class="col-md-9 panel-pane-region panel-pane-region-content">
          <?php print $content['contentmain']; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <?php if ($content['bottom']): ?>
    <div class="panel-pane-region panel-pane-region-bottom">
      <?php print $content['bottom']; ?>
    </div>
  <?php endif; ?>
</div>
