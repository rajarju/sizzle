<?php
/**
 * @file
 * Template for the Menus layout.
 */
?>
<div class="layout layout--menus">
  <?php if ($content['slideshow']): ?>
    <div class="layout__region layout__region--slideshow border--sm--bottom">
      <?php print $content['slideshow']; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['top']): ?>
    <div class="layout__region layout__region--top padding--xs--top padding--xs--bottom border--sm--bottom">
      <div class="container">
        <?php print $content['top']; ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="container">
    <div class="row">
      <?php if ($content['left']): ?>
        <div class="layout__region layout__region--left col-md-3">
          <?php print $content['left']; ?>
        </div>
      <?php endif; ?>
      <?php if ($content['contentmain']): ?>
        <div class="layout__region layout__region--content col-md-9">
          <div class="padding--lg--top padding--md--left">
            <?php print $content['contentmain']; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <?php if ($content['bottom']): ?>
    <div class="layout__region layout__region--bottom">
      <?php print $content['bottom']; ?>
    </div>
  <?php endif; ?>
</div>
