<?php
/**
 * @file
 * Template for Menu node in Grid view mode.
 */
?>
<article class="<?php print $classes; ?>">
  <div class="menu__wrapper">
    <?php if (!empty($content['featured'])): ?>
      <?php print render($content['featured']); ?>
    <?php endif; ?>

    <?php if (!empty($content['field_menu_images'])): ?>
      <div class="menu__image">
        <?php print render($content['field_menu_images'][0]); ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($title)): ?>
      <h4 class="menu__title margin--xs--top"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h4>
    <?php endif; ?>

    <?php if (!empty($content['field_menu_teaser_text'])): ?>
      <p class="menu__teaser-text"><?php print render($content['field_menu_teaser_text']); ?></p>
    <?php endif; ?>

    <?php if (!empty($content['field_menu_nutrition_types'])): ?>
      <div class="menu__nutrition-types"><?php print render($content['field_menu_nutrition_types']); ?></div>
    <?php endif; ?>

    <?php if (!empty($content['field_menu_one_liner'])): ?>
      <small class="menu__one-liner"><?php print render($content['field_menu_one_liner']); ?></small>
    <?php endif; ?>

    <?php if (!empty($content['field_menu_types'])): ?>
      <div class="menu__types border--xs--top"><?php print render($content['field_menu_types']); ?></div>
    <?php endif; ?>
  </div>

  <?php print render($extra); ?>
</article>
