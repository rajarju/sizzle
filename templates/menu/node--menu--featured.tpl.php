<?php
/**
 * @file
 * Template for Menu node in Featured view mode.
 */
?>
<?php dpm($variables); ?>
<article class="<?php print $classes; ?>">
  <div class="menu__wrapper">
    <?php if (!empty($content['field_menu_images'])): ?>
      <div class="menu__image">
        <?php print render($content['field_menu_images'][0]); ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($title)): ?>
      <h4 class="menu__title">
        <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
       </h4>
    <?php endif; ?>

    <?php if (!empty($content['field_menu_teaser_text'])): ?>
      <p class="menu__teaser-text"><?php print render($content['field_menu_teaser_text']); ?></p>
    <?php endif; ?>
  </div>

  <?php print render($extra); ?>
</article>
