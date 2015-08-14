<?php
/**
 * @file
 * Template for the Home layout.
 */
?>
<div class="layout layout--home">
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
    <div class="layout__region layout__region--content container padding--lg--bottom">
      <?php print $content['contentmain']; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['bottom']): ?>
    <div class="layout__region layout__region--bottom">
      <?php print $content['bottom']; ?>
    </div>
  <?php endif; ?>
</div>
