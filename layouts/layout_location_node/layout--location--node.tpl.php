<?php
/**
 * @file
 * Template for the Location node layout.
 */
?>
<div class="layout layout--location--node">
  <?php if ($content['slideshow']): ?>
    <div class="layout__region layout__region--slideshow border--sm--bottom">
      <?php print $content['slideshow']; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['top']): ?>
    <div class="layout__region layout__region--top padding--xs--top padding--xs--bottom">
      <div class="container">
        <?php print $content['top']; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['contentmain']): ?>
    <div class="layout__region layout__region--content container padding--lg--top padding--lg--bottom">
      <?php print $content['contentmain']; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['bottom_left'] || $content['bottom_right'] ): ?>
    <div class="row">
      <div class="col-md-6 layout__region layout__region--bottom--left">
        <?php print $content['bottom_left']; ?>
      </div>
      <div class="col-md-6 layout__region layout__region--bottom--right">
        <?php print $content['bottom_right']; ?>
      </div>
    </div>
  <?php endif; ?>
</div>